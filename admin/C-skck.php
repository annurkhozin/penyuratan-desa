<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	$data_penyuratan["nik"] = $_GET['nik'];
	$data_penyuratan["id_keperluan"] = 6;
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
	$noSkck=$_POST['noSkck'];
	$tglSkck=date_format(date_create($_POST['tglSkck']),"Y-m-d");
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=date_format(date_create($_POST['tglLahir']),"Y-m-d");
	$pekerjaan=$_POST['pekerjaan'];
	$agama=$_POST['agama'];
	$status=$_POST['status'];
	$pendidikan=$_POST['pendidikan'];
	$noKtp=$_POST['noKtp'];
	$alamat=$_POST['alamat'];
	$keperluan=$_POST['keperluan'];
	$mulai_berlaku=date_format(date_create($_POST['mulai_berlaku']),"Y-m-d");
	$selesai_berlaku=date_format(date_create($_POST['selesai_berlaku']),"Y-m-d");
	
	//simpan database
	$simpan=mysql_query("INSERT INTO skck VALUES(NULL, '$noSkck', '$tglSkck', '$nama', '$lahirDi', '$tglLahir','$pekerjaan', '$agama', '$status', '$pendidikan', '$noKtp', '$alamat', '$keperluan', '$mulai_berlaku', '$selesai_berlaku','$id_penyurataan')")or die(mysql_error());
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
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal SKCK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSkck" value='<?php echo date('d-m-Y');?>'/></td>
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
			<td>No. KTP</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noKtp" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" required></td>
		</tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="keperluan" required></td>
		</tr>
		<tr>
			<td>Berlaku</td>
			<td>:</td>
			<td><input class="" type="date" name="mulai_berlaku" value='<?php echo date('d-m-Y');?>' required> s/d <input class="" type="date" name="selesai_berlaku" value="<?php echo date('Y-m-d',strtotime(date('Y-m-d'). ' + 7 days'))?>" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>