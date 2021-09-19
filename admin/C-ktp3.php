<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$id_penyuratan=$_GET['penyuratan'];
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm">
<form action="simpan-pengajuan.php" method="post" id="form-surat" class="bg-info">

<?php
mysql_query("UPDATE penyuratan SET `catatan` = 'Diproses' WHERE `id` = '$id_penyuratan' AND LOWER(catatan) = LOWER('Diajukan')") or die(mysql_error());
$query=mysql_query("SELECT ktp.*, penduduk.noKK, penduduk.nik FROM penyuratan JOIN ktp ON ktp.id_penyuratan = penyuratan.id JOIN penduduk ON penduduk.nik = '$nik' WHERE penyuratan.nik='$nik' ")or die(mysql_error());
$row=mysql_fetch_array($query);?>
<input type="hidden" name="id_penyuratan" value="<?php echo $row['id_penyuratan']?>">
<input type="hidden" name="id_keperluan" value="1">
<input type="hidden" name="id_data" value="<?php echo $row['ktpID']?>">
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
			<td><input class="form-control" type="date" name="tglKtp" value='<?php echo $row['tglKtp'] != "" ? $row['tglKtp'] : date('Y-m-d') ;?>'/></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nama" value="<?php echo $row['nama'];?>"/></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['lahirDi'];?>"/></td>
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
					<option><?php echo $row['status'];?></option>
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
					<option><?php echo $row['pekerjaan'];?></option>
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
			<td>
				<textarea class="form-control"name="alamat"><?php echo $row['alamat'];?></textarea>
		</td>
		</tr>
		<tr>
			<td>Kepala Keluarga</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kepKeluarga" value="<?php echo $row['kepKeluarga'];?>"/></td>
		</tr>
	</table>
	<a class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Kembali</a>
	<input class="btn btn-success" type="submit" name="tambah" value="SIMPAN">
</form>
</div>
<script>
	
</script>
<?php
include "../inc/footer.php";
?>