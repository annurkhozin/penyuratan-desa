<?php
if(isset($_GET['id'])){
	include('../inc/koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT pendID FROM penduduk WHERE pendID='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del=mysql_query("DELETE FROM penduduk WHERE pendID='$id'");
		if($del){?>
			<script>document.location.href="?pages=Rpenduduk";</script><?php
		}else{?>
			<script>document.location.href="?pages=Rpenduduk";</script><?php
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>