<?php
include "../inc/koneksi.php";
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
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal SKTM</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSktm" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaOrtu" required></td>
		</tr>
		<tr>
			<td>Umur Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurOrtu" required></td>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Orang Tua</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanOrtu" />
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
			<td><input class="form-control" type="text" name="alamatOrtu" required></td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" required></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" required></td>
		</tr>
		<tr>
			<td>Pekerjaan Anak</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanAnak" />
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
			<td><input class="form-control" type="text" name="alamatAnak" required></td>
		</tr>
		<tr>
			<td>Digunakan Untuk</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="ket" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>