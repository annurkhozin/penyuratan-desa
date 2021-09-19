<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noSkck=$_POST['noSkck'];
	$tglSkck=$_POST['tglSkck'];
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$pekerjaan=$_POST['pekerjaan'];
	$agama=$_POST['agama'];
	$status=$_POST['status'];
	$pendidikan=$_POST['pendidikan'];
	$noKtp=$_POST['noKtp'];
	$alamat=$_POST['alamat'];
	$keperluan=$_POST['keperluan'];
	$berlaku=$_POST['berlaku'];
	$sd=$_POST['sd'];
	
	//update database
	$update=mysql_query("UPDATE skck SET skckID='$id', noSkck='$noSkck', tglSkck='$tglSkck', nama='$nama', lahirDi='$lahirDi', tglLahir='$tglLahir', pekerjaan='$pekerjaan', agama='$agama', status='$status', pendidikan='$pendidikan', noKtp='$noKtp', alamat='$alamat', keperluan='$keperluan', berlaku='$berlaku', sd='$sd' WHERE skckID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($update){?>
		<script>document.location.href="?pages=Rskck";</script><?php
	}else{?>
		<script>document.location.href="?pages=Uskck";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM skck WHERE skckID='$id'");
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
			<td>Nomor SKCK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="skckID" value="<?php echo $data['skckID'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal SKCK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSkck" value="<?php echo $data['tglSkck'];?>" /></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>" /></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $data['lahirDi'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $data['tglLahir'];?>" /></td>
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
			<td>Agama</td>
			<td>:</td>
			<td>
				<select class="form-control" name="agama" />
					<option value="Islam" <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
					<option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
					<option value="Katholik" <?php if($data['agama'] == 'Katholik'){ echo 'selected'; } ?>>Katholik</option>
					<option value="Hindu" <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
					<option value="Budha" <?php if($data['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
					<option value="Konghucu" <?php if($data['agama'] == 'Konghucu'){ echo 'selected'; } ?>>Konghucu</option>
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
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pendidikan" />
					<option value="Tidak/Belum Sekolah" <?php if($data['pendidikan'] == 'Tidak/Belum Sekolah'){ echo 'selected'; } ?>>Tidak/Belum Sekolah</option>
					<option value="Belum Tamat SD/Sederajat" <?php if($data['pendidikan'] == 'Belum Tamat SD/Sederajat'){ echo 'selected'; } ?>>Belum Tamat SD/Sederajat</option>
					<option value="Tamat SD/Sederajat" <?php if($data['pendidikan'] == 'Tamat SD/Sederajat'){ echo 'selected'; } ?>>Tamat SD/Sederajat</option>
					<option value="SLTP/Sederajat" <?php if($data['pendidikan'] == 'SLTP/Sederajat'){ echo 'selected'; } ?>>SLTP/Sederajat</option>
					<option value="SLTA/Sederajat" <?php if($data['pendidikan'] == 'SLTA/Sederajat'){ echo 'selected'; } ?>>SLTA/Sederajat</option>
					<option value="Diploma" <?php if($data['pendidikan'] == 'Diploma'){ echo 'selected'; } ?>>Diploma</option>
					<option value="Sarjana" <?php if($data['pendidikan'] == 'Sarjana'){ echo 'selected'; } ?>>Sarjana</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No. KTP</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noKtp" value="<?php echo $data['noKtp'];?>" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'];?>" /></td>
		</tr>
		<tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="keperluan" value="<?php echo $data['keperluan'];?>" /></td>
		</tr>
		<tr>
			<td>Berlaku</td>
			<td>:</td>
			<td><input class="" type="text" name="berlaku" value="<?php echo $data['berlaku'];?>" /> S/d <input class="" type="text" name="sd" value="<?php echo $data['sd'];?>" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>