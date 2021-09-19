<?php
$host="localhost";
$user="root";
$pass="!Apayalupa?";
$dbname="silmasdb";

date_default_timezone_set("Asia/Jakarta");

$koneksi=mysql_connect($host,$user,$pass)or die("Gagal mengkoneksi ke database!");
mysql_select_db($dbname, $koneksi)or die("Databse belum tersedia!");
?>