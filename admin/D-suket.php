<?php
if(isset($_GET['id'])){
	include('../inc/koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT suketID FROM suket WHERE suketID='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM suket WHERE suketID='$id'");
		if($del){?>
			<script>document.location.href="?pages=Rsuket";</script><?php
		}else{?>
			<script>document.location.href="?pages=Rsuket";</script><?php
		}
	}
}else{
	echo '<script>window.history.back()</script>';
}
?>