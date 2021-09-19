<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$id_penyuratan = $_GET['penyuratan'];
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm">
<form action="simpan-pengajuan.php" method="post" id="form-surat" class="bg-info">
<?php
mysql_query("UPDATE penyuratan SET `catatan` = 'Diproses' WHERE `id` = '$id_penyuratan' AND LOWER(catatan) = LOWER('Diajukan')") or die(mysql_error());
$query=mysql_query("SELECT sukel.*, penduduk.noKK, penduduk.nik FROM penyuratan JOIN sukel ON sukel.id_penyuratan = penyuratan.id JOIN penduduk ON penduduk.nik = '$nik' WHERE penyuratan.nik='$nik' ")or die(mysql_error());

$row=mysql_fetch_array($query);?>

<input type="hidden" name="id_penyuratan" value="<?php echo $row['id_penyuratan']?>">
<input type="hidden" name="id_keperluan" value="3">
<input type="hidden" name="id_data" value="<?php echo $row['sukelID']?>">
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
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglSukel" value='<?php echo $row['tglSukel'] != "" ? $row['tglSukel'] : date('Y-m-d') ;?>'/></td>
		</tr>
		<tr>
			<td>Nama Lengkap Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" required value="<?php echo $row['namaAnak']?>"></td>
		</tr>
		<tr>
			<td>Anak ke</td>
			<td>:</td>
			<td>
				<select class="form-control" name="anakKe" />
					<option><?php echo $row['anakKe']?></option>
					<option>1 (Pertama)</option>
					<option>2 (Kedua)</option>
					<option>3 (Ketiga)</option>
					<option>4 (Keempat)</option>
					<option>5 (Lima)</option>
					<option>6 (Keenam)</option>
					<option>7 (Tujuh)</option>
					<option>8 (Delapan)</option>
					<option>9 (Sembilan)</option>
					<option>10 (Sepuluh)</option>
					<option>11 (Sebelas)</option>
					<option>12 (Dua Belas)</option>
					<option>13 (Tiga Belas)</option>
					<option>14 (Empat Belas)</option>
					<option>15 (Lima Belas)</option>
					<option>16 (Enam Belas)</option>
					<option>17 (Tujuh Belas)</option>
					<option>18 (Delapan Belas)</option>
					<option>19 (Sembilan Belas)</option>
					<option>20 (Dua Puluh)</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Lahir di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" required value="<?php echo $row['lahirDi']?>"></td>
		</tr>
		<tr>
			<td>Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariLahir" required value="<?php echo $row['hariLahir']?>"></td>
		</tr>
		<tr>
			<td>Pada Tanggal</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglLahir" required value="<?php echo $row['tglLahir']?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option><?php echo $row['jenKelamin']?></option>
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaIbu" value="<?php echo $row['namaIbu'];?>"/></td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurIbu" value="<?php echo $row['umurIbu'];?>" required></td>
		</tr>
		<tr>
			<td>Alamat Ibu</td>
			<td>:</td>
			<td>
				<textarea class="form-control" type="text" name="alamatIbu"><?php echo $row['alamatIbu'];?></textarea>
			</td>
		</tr>
		<tr>
			<td>Nama Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaBapak" value="<?php echo $row['namaBapak'];?>"/></td>
		</tr>
		<tr>
			<td>Umur Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurBapak" value="<?php echo $row['umurBapak'];?>" required></td>
		</tr>
		<tr>
			<td>Alamat Bapak</td>
			<td>:</td>
			<td>
				<textarea class="form-control" type="text" name="alamatBapak"><?php echo $row['alamatBapak'];?></textarea>
			</td>
		</tr>
	</table>
	<a class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Kembali</a>
	<input class="btn btn-success" type="submit" name="tambah" value="SIMPAN">
</form>
</div>

<?php
include "../inc/footer.php";
?>