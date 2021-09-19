<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['kk'];

//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
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
	
	//simpan database
	$simpan=mysql_query("INSERT INTO skck VALUES(NULL, '$noSkck', '$tglSkck', '$nama', '$lahirDi', '$tglLahir','$pekerjaan', '$agama', '$status', '$pendidikan', '$noKtp', '$alamat', '$keperluan', '$berlaku', '$sd')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rskck";</script><?php
	}else{?>
		<script>document.location.href="?pages=Cskck";</script><?php
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
			<td>Tanggal SKCK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSkck" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaan" />
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
			<td>Agama</td>
			<td>:</td>
			<td>
				<select class="form-control" name="agama" />
					<option><?php echo $row['agama'];?></option>
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
			<td>Status</td>
			<td>:</td>
			<td>
				<select class="form-control" name="status" />
					<option><?php echo $row['statusNikah'];?></option>
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pendidikan" />
					<option><?php echo $row['pendidikan'];?></option>
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
			<td>No. KTP</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noKtp" value="<?php echo $row['nik'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="keperluan" required></td>
		</tr>
		<tr>
			<td>Berlaku</td>
			<td>:</td>
			<td><input class="" type="text" name="berlaku" value='<?php echo date('d-m-Y');?>' required> S/d <input class="" type="text" name="sd" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>