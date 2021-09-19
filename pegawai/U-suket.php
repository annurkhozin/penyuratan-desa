<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$jenisSuket=$_POST['jenisSuket'];
	$noSuket=$_POST['noSuket'];
	$tglSuket=$_POST['tglSuket'];
	$fullname=$_POST['fullname'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$jenKelamin=$_POST['jenKelamin'];
	$pekerjaan=$_POST['pekerjaan'];
	$agama=$_POST['agama'];
	$status=$_POST['status'];
	$keperluan=$_POST['keperluan'];
	$alamat=$_POST['alamat'];
	$ket=$_POST['ket'];
	
	//update database
	$update=mysql_query("UPDATE suket SET suketID='$id', jenisSuket='$jenisSuket', noSuket='$noSuket', tglSuket='$tglSuket',fullname='$fullname', lahirDi='$lahirDi', tglLahir='$tglLahir', jenKelamin='$jenKelamin', pekerjaan='$pekerjaan', agama='$agama', status='$status', keperluan='$keperluan', alamat='$alamat', ket='$ket' WHERE suketID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($update){?>
		<script>document.location.href="?pages=Rsuket";</script><?php
	}else{?>
		<script>document.location.href="?pages=Usuket";</script><?php
	}
}
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/>
<div class="well well-sm"><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM suket WHERE suketID='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$data=mysql_fetch_assoc($show);
}?>
<form action="" method="post" class="bg-info">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Jenis Surat</p>
			<td>:</td>
			<td>
				<select class="form-control" name="jenisSuket">
					<option value="SURAT KETERANGAN PENDUDUK" <?php if($data['jenisSuket'] == 'SURAT KETERANGAN PENDUDUK'){ echo 'selected'; } ?>>SURAT KETERANGAN PENDUDUK</option>
					<option value="SURAT KETERANGAN USAHA" <?php if($data['jenisSuket'] == 'SURAT KETERANGAN USAHA'){ echo 'selected'; } ?>>SURAT KETERANGAN USAHA</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nomor Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="suketID" value="<?php echo $data['suketID'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSuket" value="<?php echo $data['tglSuket'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="fullname" value="<?php echo $data['fullname'];?>"/></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $data['lahirDi'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir"value="<?php echo $data['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option value="Laki-Laki" <?php if($data['jenKelamin'] == 'Laki-Laki'){ echo 'selected'; } ?>>Laki-Laki</option>
					<option value="Perempuan" <?php if($data['jenKelamin'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
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
			<td>Keperluan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="keperluan"value="<?php echo $data['keperluan'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'];?>"/></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>