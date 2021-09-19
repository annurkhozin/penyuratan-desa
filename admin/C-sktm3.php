<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$id_penyuratan=$_GET['penyuratan'];
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well">
<form action="simpan-pengajuan.php" method="post" id="form-surat" class="bg-info">
<?php
mysql_query("UPDATE penyuratan SET `catatan` = 'Diproses' WHERE `id` = '$id_penyuratan' AND LOWER(catatan) = LOWER('Diajukan')") or die(mysql_error());
$query=mysql_query("SELECT sktm.*, penduduk.noKK, penduduk.nik FROM penyuratan JOIN sktm ON sktm.id_penyuratan = penyuratan.id JOIN penduduk ON penduduk.nik = '$nik' WHERE penyuratan.nik='$nik' ")or die(mysql_error());
$row=mysql_fetch_array($query);?>
<input type="hidden" name="id_penyuratan" value="<?php echo $row['id_penyuratan']?>">
<input type="hidden" name="id_keperluan" value="5">
<input type="hidden" name="id_data" value="<?php echo $row['sktmID']?>">
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
			<td>Tanggal SKTM</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglSktm" value='<?php echo $row['tglSktm'] != "" ? $row['tglSktm'] : date('Y-m-d') ;?>'/></td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaOrtu" value="<?php echo $row['namaOrtu'];?>"/></td>
		</tr>
		<tr>
			<td>Umur Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurOrtu" value="<?php echo $row['umurOrtu']?>" required></td>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Orang Tua</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanOrtu" />
					<option><?php echo $row['pekerjaanOrtu'];?></option>
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
			<td><input class="form-control" type="text" name="alamatOrtu" value="<?php echo $row['alamatOrtu'];?>"/></td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" value="<?php echo $row['namaAnak'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['lahirDi'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Anak</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanAnak" />
					<option><?php echo $row['pekerjaanAnak'];?></option>
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
			<td><input class="form-control" type="text" name="alamatAnak" value="<?php echo $row['alamatAnak'];?>"/></td>
		</tr>
		<tr>
			<td>Digunakan Untuk</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="ket" value="<?php echo $row['ket'];?>" /></td>
		</tr>
	</table>
	<a class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Kembali</a>
	<input class="btn btn-success" type="submit" name="tambah" value="SIMPAN">
</form>
</div>

<?php
include "../inc/footer.php";
?>