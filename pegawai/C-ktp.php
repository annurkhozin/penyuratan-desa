<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	//ambil masukan dari form
	$tglKtp=$_POST['tglKtp'];
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$jenKelamin=$_POST['jenKelamin'];
	$status=$_POST['status'];
	$pekerjaan=$_POST['pekerjaan'];
	$alamat=$_POST['alamat'];
	$kepKeluarga=$_POST['kepKeluarga'];
	//simpan kedalam database
	$simpan=mysql_query("INSERT INTO ktp VALUES(NULL,'$tglKtp','$nama','$lahirDi','$tglLahir','$jenKelamin','$status','$pekerjaan','$alamat','$kepKeluarga')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rktp";</script><?php
	}else{?>
		<script>document.location.href="?pages=Cktp";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm">
<form action="" method="post" class="bg-info">
<table class="table table-bordered table-condensed table-striped">
	<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglKtp" value='<?php echo date('d-m-Y');?>' /></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select class="form-control" name="status" />
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaan" />
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
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>Kepala Keluarga</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kepKeluarga" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>