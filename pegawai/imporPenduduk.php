<?php
include "excel_reader2.php";
include "../inc/koneksi.php";

$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);

$sukses = 0;
$gagal = 0;

for ($i=2; $i<=$hasildata; $i++){
  $noKK = $data->val($i,2); 
  $namaLengkap = $data->val($i,3);
  $nik = $data->val($i,4);
  $jenKelamin = $data->val($i,5);
	$tempatLahir = $data->val($i,6);
	$tglLahir = $data->val($i,7);
	$umur = $data->val($i,8);
	$agama = $data->val($i,9);
	$pendidikan = $data->val($i,10);
	$jenPekerjaan = $data->val($i,11);
	$statusNikah = $data->val($i,12);
	$statHubKel = $data->val($i,13);
	$wargaNeg = $data->val($i,14);
	$noPaspor = $data->val($i,15);
	$kitasKitap = $data->val($i,16);
	$namaAyah = $data->val($i,17);
	$namaIbu = $data->val($i,18);
	$alamat = $data->val($i,19);
	$rt = $data->val($i,20);
	$rw = $data->val($i,21);
	$desaKel = $data->val($i,22);
	$kecamatan = $data->val($i,23);
	$kabKota = $data->val($i,24);
	$kodePos = $data->val($i,25);
	$provinsi = $data->val($i,26);
	
	$query = "INSERT INTO penduduk VALUES (NULL, '$noKK', '$namaLengkap', '$nik', '$jenKelamin', '$tempatLahir','$tglLahir', '$umur', '$agama', '$pendidikan', '$jenPekerjaan', '$statusNikah', '$statHubKel', '$wargaNeg', '$noPaspor', '$kitasKitap', '$namaAyah', '$namaIbu', '$alamat', '$rt', '$rw', '$desaKel', '$kecamatan', '$kabKota', '$kodePos', '$provinsi')";
	$hasil = mysql_query($query);

if ($hasildata) $sukses++;
else $gagal++;
}
header("location: index.php?pages=Rpenduduk");
?>