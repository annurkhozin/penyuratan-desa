<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	//ambil masukan dari form
	$noSukel=$_POST['noSukel'];
	$tglSukel=$_POST['tglSukel'];
	$namaAnak=$_POST['namaAnak'];
	$anakKe=$_POST['anakKe'];
	$lahirDi=$_POST['lahirDi'];
	$hariLahir=$_POST['hariLahir'];
	$tglLahir=$_POST['tglLahir'];
	$jenKelamin=$_POST['jenKelamin'];
	$namaIbu=$_POST['namaIbu'];
	$umurIbu=$_POST['umurIbu'];
	$alamatIbu=$_POST['alamatIbu'];
	$namaBapak=$_POST['namaBapak'];
	$umurBapak=$_POST['umurBapak'];
	$alamatBapak=$_POST['alamatBapak'];
	//simpan kedalam database
	$simpan=mysql_query("INSERT INTO sukel VALUES(NULL,'$noSukel','$tglSukel','$namaAnak','$anakKe','$lahirDi','$hariLahir','$tglLahir','$jenKelamin','$namaIbu','$umurIbu','$alamatIbu','$namaBapak','$umurBapak','$alamatBapak')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rsukel";</script><?php
	}else{?>
		<script>document.location.href="?pages=Csukel";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm">
<form action="" method="post" class="bg-info">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSukel" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama Lengkap Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" required></td>
		</tr>
		<tr>
			<td>Anak ke</td>
			<td>:</td>
			<td>
				<select class="form-control" name="anakKe" />
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
			<td><input class="form-control" type="text" name="lahirDi" required></td>
		</tr>
		<tr>
			<td>Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariLahir" required></td>
		</tr>
		<tr>
			<td>Pada Tanggal</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" required></td>
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
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaIbu" required></td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurIbu" required></td>
		</tr>
		<tr>
			<td>Alamat Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatIbu" required></td>
		</tr>
		<tr>
			<td>Nama Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaBapak" required></td>
		</tr>
		<tr>
			<td>Umur Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurBapak" required></td>
		</tr>
		<tr>
			<td>Alamat Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatBapak" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>