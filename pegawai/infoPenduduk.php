<?php
include "../inc/koneksi.php";
?>

<h2 class="custom_font"><?php echo $judul;?></h2>
<h3 class="custom_font"><?php echo $subjudul;?></h3><hr/>

<div class="well well-sm">
<table class="table table-condensed table-striped"><?php
if(isset($_POST['submit'])){
	$cari=$_POST['cari'];
	$q=mysql_query("SELECT*FROM penduduk WHERE namaLengkap LIKE '%$cari%'")or die(mysql_error());
	while($data=mysql_fetch_array($q)){?>
	<tr>
		<td colspan="3"><h3 align="center">Nama Penduduk</h3></td>
	</tr>
	<tr>
		<td colspan="3">
		<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)"><span class="glyphicon glyphicon-chevron-left"></span>Kembali</a>
		<a class="btn btn-primary btn-sm" href="?pages=RdetailPenduduk&nik=<?php echo $data['nik'];?>&kk=<?php echo $data['noKK'];?>"><span class="glyphicon glyphicon-print"></span>&nbsp; Cetak&nbsp;&nbsp;</a>
		<a class="btn btn-warning btn-sm" href="?pages=Upenduduk&nik=<?php echo $data[nik];?>&kk=<?php echo $data['noKK'];?>"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Sunting</a>
		</td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $data['namaLengkap'];?></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td>:</td>
		<td><?php echo $data['nik'];?></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?php echo $data['jenKelamin'];?></td>
	</tr>
	<tr>
		<td>Tempat dan Tanggal Lahir</td>
		<td>:</td>
		<td><?php echo $data['tempatLahir'].", ".$data['tglLahir'];?></td>
	</tr>
		<tr>
		<td>Umur</td>
		<td>:</td>
		<td><?php echo $data['umur'];?></td>
	</tr>
	<tr>
		<td>Agama</td>
		<td>:</td>
		<td><?php echo $data['agama'];?></td>
	</tr>
	<tr>
		<td>Pendidikan</td>
		<td>:</td>
		<td><?php echo $data['pendidikan'];?></td>
	</tr>
	<tr>
		<td>Pekerjaan</td>
		<td>:</td>
		<td><?php echo $data['jenPekerjaan'];?></td>
	</tr>
	<tr>
		<td>Status Pernikahan</td>
		<td>:</td>
		<td><?php echo $data['statusNikah'];?></td>
	</tr>
	<tr>
		<td>Status Hubungan dalam Keluarga</td>
		<td>:</td>
		<td><?php echo $data['statHubKel'];?></td>
	</tr>
	<tr>
		<td>Kewarganegaraan</td>
		<td>:</td>
		<td><?php echo $data['wargaNeg'];?></td>
	</tr>
	<tr>
		<td>Nomor Paspor</td>
		<td>:</td>
		<td><?php echo $data['noPaspor'];?></td>
	</tr>
	<tr>
		<td>Nomor KITAS/KITAP</td>
		<td>:</td>
		<td><?php echo $data['kitasKitap'];?></td>
	</tr>
	<tr>
		<td>Nama Ayah Kandung</td>
		<td>:</td>
		<td><?php echo $data['namaAyah'];?></td>
	</tr>
	<tr>
		<td>Nama Ibu Kandung</td>
		<td>:</td>
		<td><?php echo $data['namaIbu'];?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $data['alamat'];?></td>
	</tr>
	<tr>
		<td>RT / RW</td>
		<td>:</td>
		<td><?php echo $data['rt']." / ".$data['rw'];?></td>
	</tr>
	<tr>
		<td>Desa / Keluranan</td>
		<td>:</td>
		<td><?php echo $data['desaKel'];?></td>
	</tr>
	<tr>
		<td>Kecamatan</td>
		<td>:</td>
		<td><?php echo $data['kecamatan'];?></td>
	</tr>
	<tr>
		<td>Kabupaten/Kota</td>
		<td>:</td>
	<td><?php echo $data['kabKota'].", Kode Pos: ".$data['kodePos'];?></td>
	</tr>
	<tr>
		<td>Provinsi</td>
		<td>:</td>
		<td><?php echo $data['provinsi'];?></td>
	</tr>
	<?php
	}
}else{
	unset($_POST['submit']);
}?>		
</table>
<br/>
</div>