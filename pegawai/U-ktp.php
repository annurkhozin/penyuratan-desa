<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$tglKtp=$_POST['tglKtp'];
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$jenKelamin=$_POST['jenKelamin'];
	$status=$_POST['status'];
	$pekerjaan=$_POST['pekerjaan'];
	$alamat=$_POST['alamat'];
	$kepKeluarga=$_POST['kepKeluarga'];
	
	//update database
	$update=mysql_query("UPDATE ktp SET ktpID='$id', tglKtp='$tglKtp',nama='$nama', lahirDi='$lahirDi',tglLahir='$tglLahir', jenKelamin='$jenKelamin', status='$status', pekerjaan='$pekerjaan', alamat='$alamat', kepKeluarga='$kepKeluarga' WHERE ktpID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($update){?>
		<script>document.location.href="?pages=Rktp";</script><?php
	}else{?>
		<script>document.location.href="?pages=Uktp";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM ktp WHERE ktpID='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$data=mysql_fetch_assoc($show);
}?>
<div class="well well-sm">
<form action="" method="post" class="bg-info">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglKtp" value="<?php echo $data['tglKtp'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>" /></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $data['lahirDi'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $data['tglLahir'];?>" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option value="Laki-Laki" <?php if($data['jenKelamin'] == 'Laki-Laki'){ echo 'selected'; } ?>>Laki-Laki</option>
					<option value="Perempuan" <?php if($data['jenKelamin'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select class="form-control" name="status" />
					<option value="Belum Kawin" <?php if($data['status'] == 'Belum Kawin'){ echo 'selected'; } ?>>Belum Kawin</option>
					<option value="Kawin" <?php if($data['status'] == 'Kawin'){ echo 'selected'; } ?>>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaan" />
					<option value="Belum/Tidak Bekerja" <?php if($data['pekerjaan'] == 'Belum/Tidak Bekerja'){ echo 'selected'; } ?>>Belum/Tidak Bekerja</option>
					<option value="Pelajar/Mahasiswa" <?php if($data['pekerjaan'] == 'Pelajar/Mahasiswa'){ echo 'selected'; } ?>>Pelajar/Mahasiswa</option>
					<option value="Mengurus Rumah Tangga" <?php if($data['pekerjaan'] == 'Mengurus Rumah Tangga'){ echo 'selected'; } ?>>Mengurus Rumah Tangga</option>
					<option value="Petani/Pekebun" <?php if($data['pekerjaan'] == 'Petani/Pekebun'){ echo 'selected'; } ?>>Petani/Pekebun</option>
					<option value="Pedagang" <?php if($data['pekerjaan'] == 'Pedagang'){ echo 'selected'; } ?>>Pedagang</option>
					<option value="Karyawan Swasta" <?php if($data['pekerjaan'] == 'Karyawan Swasta'){ echo 'selected'; } ?>>Karyawan Swasta</option>
					<option value="Wiraswasta" <?php if($data['pekerjaan'] == 'Wiraswasta'){ echo 'selected'; } ?>>Wiraswasta</option>
					<option value="Pegawai Negeri Sipil" <?php if($data['pekerjaan'] == 'Pegawai Negeri Sipil'){ echo 'selected'; } ?>>Pegawai Negeri Sipil</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'];?>" /></td>
		</tr>
		<tr>
			<td>Kepala Keluarga</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kepKeluarga" value="<?php echo $data['kepKeluarga'];?>" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>