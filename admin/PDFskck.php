<?php
session_start();
ob_start();
include_once("../inc/koneksi.php");
$kode=$_GET['kode'];
$query=mysql_query("SELECT*FROM skck WHERE skckID='".$kode."'");
$data=mysql_fetch_array($query);
$skckID=$data['skckID'];
$tglSkck=$data['tglSkck'];
$nama=$data['nama'];
$lahirDi=$data['lahirDi'];
$tglLahir=$data['tglLahir'];
$pekerjaan=$data['pekerjaan'];
$agama=$data['agama'];
$status=$data['status'];
$pendidikan=$data['pendidikan'];
$noKtp=$data['noKtp'];
$alamat=$data['alamat'];
$keperluan=$data['keperluan'];
$mulai=$data['mulai_berlaku'];
$selesai=$data['selesai_berlaku'];

$query_kades=mysql_query("SELECT fullname FROM user WHERE lower(`level`)=lower('Kades')");
$data_kades=mysql_fetch_array($query_kades);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Ket. Catatan Kepolisian</title>
</head>
<body>
<table border="0">
	<tr>
		<td><img src="../img/kopSurat.PNG" width="630"></td>
	</tr>
	<tr><td colspan="3"><hr/></td></tr>
</table>
<h3 align='center'>SURAT KETERANGAN CATATAN KEPOLISIAN<br/><small>Nomor: 472.11/<?php echo $skckID;?>/412.51.21/008/2016</small></h3> 
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini Kepala Desa Kasiman Kecamatan Kasiman Kabupaten Bojonegoro menerangkan dengan sebenarnya, bahwa :</p>
<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $nama;?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>Tempat / Tgl. Lahir</td>
		<td>:</td>
		<td><?php echo $lahirDi.", ".date_format(date_create($tglLahir),"d F Y");?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $pekerjaan;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Agama</td>
		<td>:</td>
		<td><?php echo $agama;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Status</td>
		<td>:</td>
		<td><?php echo $status;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $alamat;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Keperluan</td>
		<td>:</td>
		<td><?php echo $keperluan;?></td>
	</tr>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
		<td>Berlaku</td>
		<td>:</td>
		<td><?php echo date_format(date_create($mulai),"d F Y")." S/d ".date_format(date_create($selesai),"d F Y");?></td>
	</tr>
</table>
<p align="justify">Bahwa yang tersebut diatas adalah Penduduk Desa Kasiman yang berdasar pada kenyataan dan data-data yang ada, dan yang bersangkutan sampai dengan saat ini tidak pernah berhubungan perkara dengan pihak yang berwajib.</p>
<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>
<p align="right">
	Kasiman, <?php echo date_format(date_create($tglSkck),"d F Y");?><br/>
	KEPALA DESA KASIMAN<br/>
	<img width="100" height="100" src="../img/ttd_kades.png">
	<strong><?php echo $data_kades['fullname']?></strong>
</p>
</body>
</html>
<?php
$filename="skck-".$kode.".pdf";
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