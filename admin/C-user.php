<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
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
	$agama=$_POST['agama'];
	$pendidikan=$_POST['pendidikan'];
	$statusNikah=$_POST['statusNikah'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO user VALUES(NULL, '$fullname', '$username', '$password', '$level', '$alamat', '$tempatLahir', '$tglLahir', '$jenKelamin', '$agama', '$pendidikan', '$statusNikah')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Ruser";</script><?php
	}else{?>
		<script>document.location.href="?pages=Cuser";</script><?php
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
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="fullname" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="username" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="password" required></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td>
				<select class="form-control" name="level" />
					<option>Pegawai</option>
					<option>Kades</option>
					<option>Admin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tempatLahir" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglLahir" required></td>
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
			<td>Agama</td>
			<td>:</td>
			<td>
				<select class="form-control" name="agama" />
					<option>Islam</option>
					<option>Kristen</option>
					<option>Katholik</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Konghucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pendidikan" />
					<option>Tidak/Belum Sekolah</option>
					<option>Belum Tamat SD/Sederajat</option>
					<option>Tamat SD/Sederajat</option>
					<option>SLTP/Sederajat</option>
					<option>SLTA/Sederajat</option>
					<option>Diploma</option>
					<option>Sarjana</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Nikah</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statusNikah" />
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>