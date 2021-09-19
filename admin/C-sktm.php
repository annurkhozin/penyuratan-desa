<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	$data_penyuratan["nik"] = $_GET['nik'];
	$data_penyuratan["id_keperluan"] = 5;
	$data_penyuratan["catatan"] = "Selesai";
	
	$column_penyuratan = "`" .implode("`, `", array_keys($data_penyuratan)) . "`";
	$value_penyuratan  = "'" .implode("', '", array_values($data_penyuratan)) . "'";
	$sql_penyuratan = "INSERT INTO `penyuratan` ($column_penyuratan) VALUES ($value_penyuratan)";

	$insert_penyuratan = mysql_query($sql_penyuratan)or die(mysql_error());
	$data_penyuratan = mysql_query("SELECT MAX(id) as id FROM penyuratan") or die(mysql_error());
	$row_penyuratan=mysql_fetch_array($data_penyuratan);
	$id_penyurataan = $row_penyuratan['id'];

	//ambil masukan dari form
	$id=$_POST['id'];
	$noSktm=$_POST['noSktm'];
	$tglSktm=date_format(date_create($_POST['tglSktm']),"Y-m-d");
	$namaOrtu=$_POST['namaOrtu'];
	$umurOrtu=$_POST['umurOrtu'];
	$pekerjaanOrtu=$_POST['pekerjaanOrtu'];
	$alamatOrtu=$_POST['alamatOrtu'];
	$namaAnak=$_POST['namaAnak'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=date_format(date_create($_POST['tglLahir']),"Y-m-d");
	$pekerjaanAnak=$_POST['pekerjaanAnak'];
	$alamatAnak=$_POST['alamatAnak'];
	$ket=$_POST['ket'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sktm VALUES(NULL, '$noSktm', '$tglSktm', '$namaOrtu', '$umurOrtu', '$pekerjaanOrtu','$alamatOrtu', '$namaAnak', '$lahirDi', '$tglLahir', '$pekerjaanAnak', '$alamatAnak', '$ket','$id_penyurataan')")or die(mysql_error());
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
			<td><input class="form-control" type="date" name="tglSktm" value='<?php echo date('Y-m-d');?>'/></td>
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
			<td><input class="form-control" type="date" name="tglLahir" required></td>
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