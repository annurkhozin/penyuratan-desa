<?php
include "../inc/koneksi.php";

$id_penyuratan = $_POST['id_penyuratan'];
$id_keperluan = $_POST['id_keperluan'];
$id_data = $_POST['id_data'];
$data_penyuratan["catatan"] = "Diajukan";

$string_penyuratan = "";
foreach ($data_penyuratan as $key => $value) {
    $string_penyuratan = $string_penyuratan . "$key = '$value'"; 
}
$sql_penyuratan = "UPDATE `penyuratan` SET $string_penyuratan WHERE `id` = '$id_penyuratan'";

$update_penyuratan = mysql_query($sql_penyuratan)or die(mysql_error());
if($update_penyuratan == TRUE){
    $data_surat = array();
    $propertis = [];
    $table = "";
    if($id_keperluan==1){ // surat KTP
        $propertis = array( "alamat", "jenKelamin", "kepKeluarga", "lahirDi","nama","pekerjaan","photo","status","tglKtp","tglLahir");
        $is_date = array("tglKtp","tglLahir");
        $table = "ktp";
        $kolom_id = "ktpID";
        $file = "PDFktp.php";
    }else if($id_keperluan==2){ // Surat keterangan
        $propertis = array("jenisSuket", "noSuket", "tglSuket", "nama","lahirDi","tglLahir","jenKelamin","pekerjaan","agama","status","keperluan","alamat");
        $is_date = array("tglSuket","tglLahir");
        $table = "suket";
        $kolom_id = "suketID";
        $file = "PDFsuket.php";
    }else if($id_keperluan==3){ // Surat kelahiran
        $propertis = array("noSukel", "tglSukel", "namaAnak", "anakKe", "lahirDi", "hariLahir","tglLahir","jenKelamin","namaIbu","umurIbu","alamatIbu","namaBapak","umurBapak","alamatBapak");
        $is_date = array("tglSukel","tglLahir");
        $table = "sukel";
        $kolom_id = "sukelID";
        $file = "PDFsukel.php";
    }else if($id_keperluan==4){ // Surat kematian
        $propertis = array("noSukem", "tglSukem", "namaAlm", "jenKelamin", "alamatAlm", "hariWafat","tglWafat","wafatDi","sebabWafat");
        $is_date = array("tglSukem","tglWafat");
        $table = "sukem";
        $kolom_id = "sukemID";
        $file = "PDFsukem.php";
    }else if($id_keperluan==5){ // Surat tidak mampu
        $propertis = array("noSktm", "tglSktm", "namaOrtu", "umurOrtu", "pekerjaanOrtu", "alamatOrtu","namaAnak","lahirDi","tglLahir","pekerjaanAnak","alamatAnak","ket");
        $is_date = array("tglSktm","tglLahir");
        $table = "sktm";
        $kolom_id = "sktmID";
        $file = "PDFsktm.php";
    }else if($id_keperluan==6){ // Surat SKCK
        $propertis = array("noSkck", "tglSkck", "nama", "lahirDi", "tglLahir", "pekerjaan","agama","status","pendidikan","noKtp","alamat","keperluan","mulai_berlaku","selesai_berlaku");
        $is_date = array("tglSkck","tglLahir","mulai_berlaku","selesai_berlaku");
        $table = "skck";
        $kolom_id = "skckID";
        $file = "PDFskck.php";
    }else if($id_keperluan==7){ // Surat kehilangan
        $propertis = array("noSukeh", "tglSukeh", "nama", "lahirDi", "tglLahir", "pekerjaan","agama","status","alamat","kehilangan","atasNama","alamatKeh","lokKehilangan");
        $is_date = array("tglSukeh","tglLahir");
        $table = "sukeh";
        $kolom_id = "sukehID";
        $file = "PDFsukeh.php";
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
        $string_surat = "";
        $i = 1;
        foreach ($data_surat as $key => $value) {
            if($i < count($data_surat)){
                $string_surat = $string_surat . "$key = '$value', "; 
            }else{
                $string_surat = $string_surat . "$key = '$value' "; 
            }
            $i++;
        }
        $sql_surat = "UPDATE `$table` SET $string_surat WHERE $kolom_id = '$id_data'";
        $insert_surat = mysql_query($sql_surat)or die(mysql_error());
        if($insert_surat == TRUE){
            mysql_query("UPDATE penyuratan SET `catatan` = 'Selesai' WHERE `id` = '$id_penyuratan' ") or die(mysql_error());
            $response["link"] = "$file?kode=$id_data";
            $response["status"] = "success";
        }else{
            $response["status"] = "error1";
        }
    }else{
        $response["status"] = "error2";
    }

}else{
    $response["status"] = "error3";
}


echo json_encode($response);
?>