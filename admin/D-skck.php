<?php
if(isset($_GET['id'])){
	include('../inc/koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT skckID FROM skck WHERE skckID='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del=mysql_query("DELETE FROM skck WHERE skckID='$id'");
		if($del){?>
			<script>document.location.href="?pages=Rskck";</script><?php
		}else{?>
			<script>document.location.href="?pages=Rskck";</script><?php
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>