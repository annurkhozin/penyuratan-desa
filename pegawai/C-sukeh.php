<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noSukeh=$_POST['noSukeh'];
	$tglSukeh=$_POST['tglSukeh'];
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=$_POST['tglLahir'];
	$pekerjaan=$_POST['pekerjaan'];
	$agama=$_POST['agama'];
	$status=$_POST['status'];
	$alamat=$_POST['alamat'];
	$kehilangan=$_POST['kehilangan'];
	$atasNama=$_POST['atasNama'];
	$alamatKeh=$_POST['alamatKeh'];
	$lokKehilangan=$_POST['lokKehilangan'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sukeh VALUES(NULL, '$noSukeh', '$tglSukeh', '$nama', '$lahirDi', '$tglLahir','$pekerjaan', '$agama', '$status', '$alamat', '$kehilangan', '$atasNama', '$alamatKeh', '$lokKehilangan')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rsukeh";</script><?php
	}else{?>
		<script>document.location.href="?pages=Csukeh";</script><?php
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
			<td>Tanggal Surat Kehilangan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSukeh" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" required></td>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" required></td>
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
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>Kehilangan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kehilangan" required></td>
		</tr>
		<tr>
			<td>Atas Nama</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="atasNama" required></td>
		</tr>
		<tr>
			<td>Alamat Kehilangan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatKeh" required></td>
		</tr>
		<tr>
			<td>Lokasi Kehilangan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lokKehilangan" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>