<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
$kode=$_GET['kode'];
$query=mysql_query("SELECT*FROM sktm WHERE sktmID='".$kode."'");
$data=mysql_fetch_array($query);
$sktmID=$data['sktmID'];
$tglSktm=$data['tglSktm'];
$namaOrtu=$data['namaOrtu'];
$umurOrtu=$data['umurOrtu'];
$pekerjaanOrtu=$data['pekerjaanOrtu'];
$alamatOrtu=$data['alamatOrtu'];
$namaAnak=$data['namaAnak'];
$lahirDi=$data['lahirDi'];
$tglLahir=$data['tglLahir'];
$pekerjaanAnak=$data['pekerjaanAnak'];
$alamatAnak=$data['alamatAnak'];
$ket=$data['ket'];


$query_kades=mysql_query("SELECT fullname FROM user WHERE lower(`level`)=lower('Kades')");
$data_kades=mysql_fetch_array($query_kades);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SKTM</title>
</head>
<body>
<table border="0">
	<tr>
		<td><img src="../img/kopSurat.PNG" width="630"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<h3 align='center'>SURAT KETERANGAN TIDAK MAMPU<br/><small>Nomor: 471.3/<?php echo $sktmID;?>/412.51.21/008/2016</small></h3> 
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Kasiman Kecamatan Kasiman Kabupaten Bojonegoro menerangkan dengan sebenarnya, bahwa :</p>
<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $namaOrtu;?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Umur</td>
		<td>:</td>
		<td><?php echo $umurOrtu;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $pekerjaanOrtu;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamatOrtu;?></td>
	</tr>
</table>
<p align="justify">Bahwa yang tersebut diatas adalah Penduduk Desa Kasiman yang berdasar pada kenyataan dan data-data yang ada termasuk warga kami yang berpenghasikan tidak menetu / ekonomi lemah. Surat Keterangan ini dipergunakan untuk <?php echo $ket;?> : </p>
<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $namaAnak;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Tempat/Tgl. Lahir</td>
		<td>:</td>
		<td><?php echo $lahirDi.", ".date_format(date_create($tglLahir),"d F Y");?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $pekerjaanAnak;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamatAnak;?></td>
	</tr>
</table>
<p align="justify">Demikian Surat Keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>
<p align="right">
	Kasiman, <?php echo date_format(date_create($tglSktm),"d F Y");?><br/>
	KEPALA DESA KASIMAN<br/>
	<img width="100" height="100" src="../img/ttd_kades.png">
	<strong><?php echo $data_kades['fullname']?></strong>
</p>
</body>
</html>
<?php
$filename="sktm-".$kode.".pdf";
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