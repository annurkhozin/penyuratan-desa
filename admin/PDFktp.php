<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
$kode=$_GET['kode'];
$query=mysql_query("SELECT*FROM ktp WHERE ktpID='".$kode."'");
$data=mysql_fetch_array($query);
$tglKtp=$data['tglKtp'];
$nama=$data['nama'];
$lahirDi=$data['lahirDi'];
$tglLahir=$data['tglLahir'];
$status=$data['status'];
$pekerjaan=$data['pekerjaan'];
$alamat=$data['alamat'];
$kepKeluarga=$data['kepKeluarga'];

$query_kades=mysql_query("SELECT fullname FROM user WHERE lower(`level`)=lower('Kades')");
$data_kades=mysql_fetch_array($query_kades);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Pengajuan KTP</title>
</head>
<body>
<table border="0">
	<tr>
		<td><img src="../img/kopSurat.PNG" width="650"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<h3 align='center'>FORMULIR PENGAJUAN KARTU TANDA PENDUDUK</h3> 
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama;?></td>
	</tr>
	<tr>
		<td>Tempat/Tgl. Lahir</td>
		<td>:</td>
		<td><?php echo $lahirDi.", ".date_format(date_create($tglLahir),"d F Y");?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>:</td>
		<td><?php echo $status;?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $pekerjaan;?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat;?></td>
	</tr>
	<tr>
		<td>Kepala Keluarga</td>
		<td>:</td>
		<td><?php echo $kepKeluarga;?></td>
	</tr>
</table>
<table>
	<tr>
		<td><img src="../img/kolom.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td align="center"><br/>
			Kasiman, <?php echo date_format(date_create($tglKtp),"d F Y");?><br/>
			KEPALA DESA KASIMAN<br/>
			<img width="100" height="100" src="../img/ttd_kades.png">
			<strong><?php echo $data_kades['fullname']?></strong>
		</td>
	</tr>
</table>
</body>
</html>
<?php
$filename="sktm-".$kode.".pdf";
$content = ob_get_clean();
	$content = '<page style="font-family: freeserif">'.nl2br($content).'</page>';
	require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
	try
	{
		$html2pdf = new HTML2PDF('P','A4','en', TRUE, 'UTF-8',array(10, 10, 10, 10));
		$html2pdf->setDefaultFont('Times');
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		$html2pdf->Output($filename);
	}
	catch(HTML2PDF_exception $e) { echo $e; }
?>