<?php 
if(isset($_GET['id'])){
    include "inc/koneksi.php";
    $id = $_GET['id'];
    $keperluan = $_GET['keperluan'];
    $cek = mysql_query("DELETE FROM penyuratan WHERE id = '$id' AND catatan = 'Diajukan'") or die(mysql_error());
    if($cek){
        if($keperluan=="1"){
            mysql_query("DELETE FROM ktp WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="2"){
            mysql_query("DELETE FROM suket WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="3"){
            mysql_query("DELETE FROM sukel WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="4"){
            mysql_query("DELETE FROM sukem WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="5"){
            mysql_query("DELETE FROM sktp WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="6"){
            mysql_query("DELETE FROM skck WHERE id_penyuratan = '$id'") or die(mysql_error());
        }elseif($keperluan=="7"){
            mysql_query("DELETE FROM sukeh WHERE id_penyuratan = '$id'") or die(mysql_error());
        }
        
	    echo '<script>document.location.href="riwayat.php";</script>';
    }else{
        echo '<script>window.history.back()</script>';    
    }
}else{
	echo '<script>window.history.back()</script>';
}?>
        