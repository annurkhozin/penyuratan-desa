<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Kematian</title>
</head>
<body>
<table border="0">
	<tr>
		<td><img src="../img/kopSurat.PNG" width="630"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<!--JUDUL TABEL DISINI-->
<h3 align='center'>SURAT KEMATIAN</h3>
<table align="center" class="table table-bordered" border="1" width="100%">
	<tr align="center">
		<th>No. Surat</th>
		<th>Nama Almarhum/h</th>
		<th>Tanggal Wafat</th>
		<th>Alamat</th>
	</tr><?php
	//pilih tabel
	$query=mysql_query("SELECT*FROM sukem");
	//tampilkan record
	while($data=mysql_fetch_array($query)){
		$sukemID=$data['sukemID'];
		$namaAlm=$data['namaAlm'];
		$tglWafat=$data['tglWafat'];
		$alamatAlm=$data['alamatAlm'];
		?>
		<tr>
			<td align="center"><?php echo $sukemID;?></td>
			<td><?php echo $namaAlm;?></td>
			<td><?php echo $tglWafat;?></td>
			<td><?php echo $alamatAlm;?></td>
		</tr><?php
	}?>
		</table>

</body>
</html>
<?php
$filename="suket-".$kode.".pdf";
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