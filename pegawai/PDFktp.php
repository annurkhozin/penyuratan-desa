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
		<td><?php echo $lahirDi.", ".$tglLahir;?></td>
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
		<td><img src="../img/kolom.PNG">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td align="center"><br/>
			Kasiman, <?php echo $tglKtp;?><br/>
			KEPALA DESA KASIMAN
			<p></p>
			<p></p><br/>
			<p>BAMBANG SUSILO</p>
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
		$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(20, 2, 20, 0));
		$html2pdf->setDefaultFont('Times');
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		$html2pdf->Output($filename);
	}
	catch(HTML2PDF_exception $e) { echo $e; }
?>