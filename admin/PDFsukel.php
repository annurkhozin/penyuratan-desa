<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
$kode=$_GET['kode'];
$query=mysql_query("SELECT*FROM sukel WHERE sukelID='".$kode."'");
$data=mysql_fetch_array($query);
$sukelID=$data['sukelID'];
$noSukel=$data['noSukel'];
$tglSukel=$data['tglSukel'];
$namaAnak=$data['namaAnak'];
$anakKe=$data['anakKe'];
$lahirDi=$data['lahirDi'];
$hariLahir=$data['hariLahir'];
$tglLahir=$data['tglLahir'];
$jenKelamin=$data['jenKelamin'];
$namaIbu=$data['namaIbu'];
$umurIbu=$data['umurIbu'];
$alamatIbu=$data['alamatIbu'];
$namaBapak=$data['namaBapak'];
$umurBapak=$data['umurBapak'];
$alamatBapak=$data['alamatBapak'];

$query_kades=mysql_query("SELECT fullname FROM user WHERE lower(`level`)=lower('Kades')");
$data_kades=mysql_fetch_array($query_kades);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Kelahiran</title>
</head>
<body>
<table border="0">
	<tr>
		<td><img src="../img/kopSurat.PNG" width="640"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<h3 align='center'>SURAT KELAHIRAN<br/><small>Nomor: 472.11/<?php echo $sukelID;?>/412.51.21/008/2016</small></h3> 
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Kasiman Kecamatan Kasiman Kabupaten Bojonegoro dengan ini menerangkan dengan sebenarnya bahwa pada:</p>
<table>
	<tr>
		<td>Hari &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $hariLahir;?></td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $lahirDi.", ".date_format(date_create($tglLahir),"d F Y");?></td>
	</tr>
	<tr>
		<td>Di</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $alamatIbu;?></td>
	</tr>
</table>
<p align="justify">Telah lahir anak ke-<?php echo $anakKe." ".$jenKelamin;?> yang bernama:
<h4 align="center"><?php echo $namaAnak; ?></h4>
Dari perkawinan sah antara:</p>
<table>
	<tr>
		<td>(Ibu) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $namaIbu;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Umur</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $umurIbu;?> Tahun</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $alamatIbu;?></td>
	</tr>
	<tr>
		<td>(Ayah) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $namaBapak;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Umur</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $umurBapak;?> Tahun</td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</td>
		<td><?php echo $alamatBapak;?></td>
	</tr>
</table>
<p align="justify">Surat Keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>
<p align="right">
	Kasiman, <?php echo date_format(date_create($tglSukel),"d F Y");?><br/>
	KEPALA DESA KASIMAN<br/>
	<img width="100" height="100" src="../img/ttd_kades.png">
	<strong><?php echo $data_kades['fullname']?></strong>
</p>
</body>
</html>
<?php
$filename="sukel-".$kode.".pdf";
$content = ob_get_clean();
	$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
	require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
	try
	{
		$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(20, 2, 20, 0));
		$html2pdf->setDefaultFont('Times');
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		$html2pdf->Output($filename);
	}
	catch(HTML2PDF_exception $e) { echo $e; }
?>