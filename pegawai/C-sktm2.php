<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['kk'];

//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noSktm=$_POST['noSktm'];
	$tglSktm=$_POST['tglSktm'];
	$namaOrtu=$_POST['namaOrtu'];
	$umurOrtu=$_POST['umurOrtu'];
	$pekerjaanOrtu=$_POST['pekerjaanOrtu'];
	$alamatOrtu=$_POST['alamatOrtu'];
	$namaAnak=$_POST['namaAnak'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$pekerjaanAnak=$_POST['pekerjaanAnak'];
	$alamatAnak=$_POST['alamatAnak'];
	$ket=$_POST['ket'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sktm VALUES(NULL, '$noSktm', '$tglSktm', '$namaOrtu', '$umurOrtu', '$pekerjaanOrtu','$alamatOrtu', '$namaAnak', '$lahirDi', '$tglLahir', '$pekerjaanAnak', '$alamatAnak', '$ket')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rsktm";</script><?php
	}else{?>
		<script>document.location.href="?pages=Csktm";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well">
<form action="" method="post" class="bg-info">

<?php
$query=mysql_query("SELECT*FROM penduduk WHERE penduduk.nik='$nik'")or die(mysql_error());
$row=mysql_fetch_array($query);?>
<div class="panel panel-primary">
	<div class="panel-heading">Kartu Keluarga</div>
	<div class="panel-body">
		<table>
			<tr>
				<td>KK</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['noKK'];?></td>
			</tr>
			<tr>
				<td>NIK</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['nik'];?></td>
			</tr>
		</table>
	</div>
</div>

	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal SKTM</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSktm" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaOrtu" value="<?php echo $row['namaAyah'];?>"/></td>
		</tr>
		<?php
		$query=mysql_query("SELECT*FROM penduduk WHERE penduduk.noKK='$kk' AND penduduk.statHubKel='KEPALA KELUARGA'")or die(mysql_error());
		$row2=mysql_fetch_array($query);?>
		<tr>
			<td>Umur Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurOrtu" value="<?php echo $row2['umur'];?>" required></td>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Orang Tua</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanOrtu" />
					<option><?php echo $row2['jenPekerjaan'];?></option>
					<option>Belum/Tidak Bekerja</option>
					<option>Pelajar/Mahasiswa</option>
					<option>Mengurus Rumah Tangga</option>
					<option>Petani/Pekebun</option>
					<option>Pedagang</option>
					<option>Karyawan Swasta</option>
					<option>Wiraswasta</option>
					<option>Pegawai Negeri Sipil</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatOrtu" value="<?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Anak</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanAnak" />
					<option><?php echo $row['jenPekerjaan'];?></option>
					<option>Belum/Tidak Bekerja</option>
					<option>Pelajar/Mahasiswa</option>
					<option>Mengurus Rumah Tangga</option>
					<option>Petani/Pekebun</option>
					<option>Pedagang</option>
					<option>Karyawan Swasta</option>
					<option>Wiraswasta</option>
					<option>Pegawai Negeri Sipil</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAnak" value="<?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
		<tr>
			<td>Digunakan Untuk</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="ket" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>