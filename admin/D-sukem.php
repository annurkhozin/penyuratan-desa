<?php
if(isset($_GET['id'])){
	include('../inc/koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT sukemID FROM sukem WHERE sukemID='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del=mysql_query("DELETE FROM sukem WHERE sukemID='$id'");
		if($del){?>
			<script>document.location.href="?pages=Rsukem";</script><?php
		}else{?>
			<script>document.location.href="?pages=Rsukem";</script><?php
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>