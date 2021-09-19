<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
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
		<td><img src="../img/kopSurat.PNG" width="630"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<!--JUDUL TABEL DISINI-->
<h3 align='center'>SURAT PENGAJUAN KTP</h3>
<table align="center" class="table table-bordered" border="1" width="100%">
	<tr align="center">
		<th>Tanggal Surat</th>
		<th>Nama</th>
		<th>Kepala Keluarga</th>
	</tr><?php
	//pilih tabel
	$query=mysql_query("SELECT*FROM ktp");
	//tampilkan record
	while($data=mysql_fetch_array($query)){
		$tglKtp=$data['tglKtp'];
		$nama=$data['nama'];
		$kepKeluarga=$data['kepKeluarga'];
		?>
		<tr>
			<td><?php echo $tglKtp;?></td>
			<td><?php echo $nama;?></td>
			<td><?php echo $kepKeluarga;?></td>
		</tr><?php
	}?>
		</table>

</body>
</html>
<?php
$filename="ktp-".$kode.".pdf";
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