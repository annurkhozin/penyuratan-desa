<?php
include "inc/koneksi.php";

$propertis_penyuratan = array("device_id","id_keperluan", "nik","no_hp", "ktp","catatan");
$data_penyuratan["catatan"] = "Diajukan";
foreach ($_POST as $key => $value) {
    if(in_array($key,$propertis_penyuratan)){
        $data_penyuratan[$key] = addslashes($_POST[$key]);
    }
}
$column_penyuratan = "`" .implode("`, `", array_keys($data_penyuratan)) . "`";
$value_penyuratan  = "'" .implode("', '", array_values($data_penyuratan)) . "'";
$sql_penyuratan = "INSERT INTO `penyuratan` ($column_penyuratan) VALUES ($value_penyuratan)";

$insert_penyuratan = mysql_query($sql_penyuratan)or die(mysql_error());
if($insert_penyuratan == TRUE){
    $data_penyuratan = mysql_query("SELECT MAX(id) as id FROM penyuratan") or die(mysql_error());
    $id_penyuratan = 0;
    while($row = mysql_fetch_array($data_penyuratan,MYSQL_ASSOC)){
        $id_penyuratan = $row['id'];
    }
    
    $id_keperluan = $_POST['id_keperluan'];
    $data_surat = array(
        "id_penyuratan" => $id_penyuratan
    );
    $propertis = [];
    $table = "";
    if($id_keperluan==1){ // surat KTP
        $propertis = array( "alamat", "jenKelamin", "kepKeluarga", "lahirDi","nama","pekerjaan","photo","status","tglKtp","tglLahir");
        $is_date = array("tglKtp","tglLahir");
        $table = "ktp";
    }else if($id_keperluan==2){ // Surat keterangan
        $propertis = array("jenisSuket", "noSuket", "tglSuket", "nama","lahirDi","tglLahir","jenKelamin","pekerjaan","agama","status","keperluan","alamat");
        $is_date = array("tglSuket","tglLahir");
        $table = "suket";
    }else if($id_keperluan==3){ // Surat kelahiran
        $propertis = array("noSukel", "tglSukel", "namaAnak", "anakKe", "lahirDi", "hariLahir","tglLahir","jenKelamin","namaIbu","umurIbu","alamatIbu","namaBapak","umurBapak","alamatBapak");
        $is_date = array("tglSukel","tglLahir");
        $table = "sukel";
    }else if($id_keperluan==4){ // Surat kematian
        $propertis = array("noSukem", "tglSukem", "namaAlm", "jenKelamin", "alamatAlm", "hariWafat","tglWafat","wafatDi","sebabWafat");
        $is_date = array("tglSukem","tglWafat");
        $table = "sukem";
    }else if($id_keperluan==5){ // Surat tidak mampu
        $propertis = array("noSktm", "tglSktm", "namaOrtu", "umurOrtu", "pekerjaanOrtu", "alamatOrtu","namaAnak","lahirDi","tglLahir","pekerjaanAnak","alamatAnak","ket");
        $is_date = array("tglSktm","tglLahir");
        $table = "sktm";
    }else if($id_keperluan==6){ // Surat SKCK
        $propertis = array("noSkck", "tglSkck", "nama", "lahirDi", "tglLahir", "pekerjaan","agama","status","pendidikan","noKtp","alamat","keperluan");
        $is_date = array("tglSkck","tglLahir");
        $table = "skck";
    }else if($id_keperluan==7){ // Surat kehilangan
        $propertis = array("noSukeh", "tglSukeh", "nama", "lahirDi", "tglLahir", "pekerjaan","agama","status","alamat","kehilangan","atasNama","alamatKeh","lokKehilangan");
        $is_date = array("tglSukeh","tglLahir");
        $table = "sukeh";
    }
    
    foreach ($_POST as $key => $value) {
        if(in_array($key,$propertis)){
            if(in_array($key,$is_date)){
                $data_surat[$key] = date_format(date_create(($_POST[$key])),"Y-m-d");
            }else{
                $data_surat[$key] = addslashes($_POST[$key]);
            }
        }
    }

    if($table){
        $column_surat = "`" .implode("`, `", array_keys($data_surat)) . "`";
        $value_surat  = "'" .implode("', '", array_values($data_surat)) . "'";
        $sql_surat = "INSERT INTO `$table` ($column_surat) VALUES ($value_surat)";
        $insert_surat = mysql_query($sql_surat)or die(mysql_error());
        if($insert_surat == TRUE){
            $response["status"] = "success";
        }else{
            $response["status"] = "error";
        }
    }else{
        $response["status"] = "error";
    }

}else{
    $response["status"] = "error";
}


echo json_encode($response);
?>