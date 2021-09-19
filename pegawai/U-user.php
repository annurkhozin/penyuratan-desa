<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$fullname=$_POST['fullname'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];
	$alamat=$_POST['alamat'];
	$tempatLahir=$_POST['tempatLahir'];
	$tglLahir=$_POST['tglLahir'];
	$jenKelamin=$_POST['jenKelamin'];
	$umur=$_POST['umur'];
	$agama=$_POST['agama'];
	$pendidikan=$_POST['pendidikan'];
	$statusNikah=$_POST['statusNikah'];
	
	//simpan database
	$update=mysql_query("UPDATE user SET userID='$id', fullname='$fullname', username='$username', password='$password', level='$level', alamat='$alamat', tempatLahir='$tempatLahir', tglLahir='$tglLahir', jenKelamin='$jenKelamin', umur='$umur', agama='$agama', pendidikan='$pendidikan', statusNikah='$statusNikah' WHERE userID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Ruser";</script><?php
	}else{?>
		<script>document.location.href="?pages=Uuser";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm"><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM user WHERE userID='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$data=mysql_fetch_assoc($show);
}?>
<form action="" method="post" class="bg-info">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="fullname" value="<?php echo $data['fullname'];?>" /></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="username" value="<?php echo $data['username'];?>" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="password" value="<?php echo $data['password'];?>" /></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>
				<select class="form-control" name="level" />
					<option value="Pegawai" <?php if($data['level'] == 'Pegawai'){ echo 'selected'; } ?>>Pegawai</option>
					<option value="Kades" <?php if($data['level'] == 'Kades'){ echo 'selected'; } ?>>Kades</option>
					<option value="Admin" <?php if($data['level'] == 'Admin'){ echo 'selected'; } ?>>Admin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'];?>" /></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tempatLahir" value="<?php echo $data['tempatLahir'];?>" /></td>
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
			<td>Umur</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umur" value="<?php echo $data['umur'];?>" /></td>
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
			<td>Status Nikah</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statusNikah"/>
					<option value="Belum Kawin" <?php if($data['statusNikah'] == 'Belum Kawin'){ echo 'selected'; } ?>>Belum Kawin</option>
					<option value="Kawin" <?php if($data['statusNikah'] == 'Kawin'){ echo 'selected'; } ?>>Kawin</option>
				</select>
			</td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>