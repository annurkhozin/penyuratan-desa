<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['kk'];

//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	$data_penyuratan["nik"] = $_GET['nik'];
	$data_penyuratan["id_keperluan"] = 1;
	$data_penyuratan["catatan"] = "Selesai";
	
	$column_penyuratan = "`" .implode("`, `", array_keys($data_penyuratan)) . "`";
	$value_penyuratan  = "'" .implode("', '", array_values($data_penyuratan)) . "'";
	$sql_penyuratan = "INSERT INTO `penyuratan` ($column_penyuratan) VALUES ($value_penyuratan)";

	$insert_penyuratan = mysql_query($sql_penyuratan)or die(mysql_error());
	$data_penyuratan = mysql_query("SELECT MAX(id) as id FROM penyuratan") or die(mysql_error());
	$row_penyuratan=mysql_fetch_array($data_penyuratan);
	$id_penyurataan = $row_penyuratan['id'];


	//ambil masukan dari form
	$tglKtp=date_format(date_create($_POST['tglKtp']),"Y-m-d");
	$nama=$_POST['nama'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=date_format(date_create($_POST['tglLahir']),"Y-m-d");
	$jenKelamin=$_POST['jenKelamin'];
	$status=$_POST['status'];
	$pekerjaan=$_POST['pekerjaan'];
	$alamat=$_POST['alamat'];
	$kepKeluarga=$_POST['kepKeluarga'];
	//simpan kedalam database
	$simpan=mysql_query("INSERT INTO ktp VALUES(NULL,'$tglKtp','$nama','$lahirDi','$tglLahir','$jenKelamin','$status','$pekerjaan','$alamat','$kepKeluarga','$id_penyurataan')")or die(mysql_error());
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

	<table class="table table-bordered table-condensed table-striped">
		<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglKtp" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option><?php echo $row['jenKelamin'];?></option>
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
					<option><?php echo $row['statusNikah'];?></option>
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
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo "Desa ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." DS. ".$row['desaKel']." KEC. ".$row['kecamatan']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
		<?php
		$query=mysql_query("SELECT*FROM penduduk WHERE penduduk.noKK='$kk' AND penduduk.statHubKel='KEPALA KELUARGA'")or die(mysql_error());
		$row2=mysql_fetch_array($query);?>
		<tr>
			<td>Kepala Keluarga</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kepKeluarga" value="<?php echo $row2['namaLengkap'];?>"/></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.back()">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>