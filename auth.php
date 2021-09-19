<?php
session_start();
include "inc/koneksi.php";
if(isset($_POST['login'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	if($level=="Admin"){
		$query=mysql_query("SELECT*FROM user WHERE username='$username' AND password='$password' AND level='Admin' ")or die(mysql_error());
		$check=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		$adminID=$row['adminID'];
		if($check){
			$_SESSION['username']=$username;
			$_SESSION['adminID']=$adminID;
			$_SESSION['level']= $level;
			$_SESSION['waktu']= date("d-m-Y H:i:s");?>
			<script>document.location.href="admin/?page=home";</script><?php
		}else{?>
			<script>document.location.href="login.php?status=fail!";</script><?php
		}
	}
	if($level=="Pegawai"){
    $query=mysql_query("SELECT*FROM user WHERE username='$username' AND password='$password' AND level='Pegawai' ")or die(mysql_error());
    $check=mysql_num_rows($query);
    $row=mysql_fetch_array($query);
    $pegawaiID=$row['pegawaiID'];
		if($check){
			$_SESSION['username']=$username;
			$_SESSION['pegawaiID']=$pegawaiID;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			$_SESSION['level']=$level; ?>
			<script>document.location.href="pegawai/?pages=home";</script><?php
		}else{?>
			<script>document.location.href="login.php?status=fail!";</script><?php
		}
	}
	if($level=="Kades"){
			$query=mysql_query("SELECT*FROM user WHERE username='$username' AND password='$password' AND level='Kades'");
			$check=mysql_num_rows($query);
			$row=mysql_fetch_array($query);
			$kadesID=$row['kadesID'];
			//jika pemeriksaan ok
			if($check){
				$_SESSION['username']=$username;
				$_SESSION['kadesID']=$kadesID;
				$_SESSION['waktu']=date("Y-m-d H:i:s");
				$_SESSION['level']=$level;?>
				<!--arahkan ke area kades-->
				<script>document.location.href="kades/?pages=home";</script><?php
		}else{?>
			<script>document.location.href="login.php?status=fail!";</script><?php
			}
		}
		
    //jika level kosong
		if($level==""){ ?>
				<script language="javascript">
					alert('Anda belum memilih pegawai, Kades, ataukah Admin!');
				document.location.href="login.php";</script><?php
			}
}else{
	unset($_POST['login']);
}
?>