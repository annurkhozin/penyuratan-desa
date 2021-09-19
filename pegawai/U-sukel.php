<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
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
	
	//update database
	$update=mysql_query("UPDATE sukel SET sukelID='$id', noSukel='$noSukel', tglSukel='$tglSukel',namaAnak='$namaAnak',anakKe='$anakKe', lahirDi='$lahirDi', hariLahir='$hariLahir', tglLahir='$tglLahir', jenKelamin='$jenKelamin', namaIbu='$namaIbu', umurIbu='$umurIbu', alamatIbu='$alamatIbu', namaBapak='$namaBapak', umurBapak='$umurBapak', alamatBapak='$alamatBapak' WHERE sukelID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($update){?>
		<script>document.location.href="?pages=Rsukel";</script><?php
	}else{?>
		<script>document.location.href="?pages=Usukel";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM sukel WHERE sukelID='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$data=mysql_fetch_assoc($show);
}?>
<div class="well well-sm">
<form action="" method="post" class="bg-info">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Nomor Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="sukelID" value="<?php echo $data['sukelID'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Surat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSukel" value="<?php echo $data['tglSukel'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Lengkap Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" value="<?php echo $data['namaAnak'];?>" /></td>
		</tr>
		<tr>
			<td>Anak ke</td>
			<td>:</td>
			<td>
				<select class="form-control" name="anakKe" />
					<option value="1 (Pertama)" <?php if($data['anakKe'] == '1 (Pertama)'){ echo 'selected'; } ?>>1 (Pertama)</option>
					<option value="2 (Kedua)" <?php if($data['anakKe'] == '2 (Kedua)'){ echo 'selected'; } ?>>2 (Kedua)</option>
					<option value="3 (Ketiga)" <?php if($data['anakKe'] == '3 (Ketiga)'){ echo 'selected'; } ?>>3 (Ketiga)</option>
					<option value="4 (Keempat)" <?php if($data['anakKe'] == '4 (Keempat)'){ echo 'selected'; } ?>>4 (Keempat)</option>
					<option value="5 (Kelima)" <?php if($data['anakKe'] == '5 (Kelima)'){ echo 'selected'; } ?>>5 (Lima)</option>
					<option value="6 (Keenam)" <?php if($data['anakKe'] == '6 (Keenam)'){ echo 'selected'; } ?>>6 (Keenam)</option>
					<option value="7 (Tujuh)" <?php if($data['anakKe'] == '7 (Tujuh)'){ echo 'selected'; } ?>>7 (Tujuh)</option>
					<option value="8 (Delapan)" <?php if($data['anakKe'] == '8 (Delapan)'){ echo 'selected'; } ?>>8 (Delapan)</option>
					<option value="9 (Sembilan)" <?php if($data['anakKe'] == '9 (Sembilan)'){ echo 'selected'; } ?>>9 (Sembilan)</option>
					<option value="10 (Sepuluh)" <?php if($data['anakKe'] == '10 (Supuluh)'){ echo 'selected'; } ?>>10 (Sepuluh)</option>
					<option value="11 (Sebelas)" <?php if($data['anakKe'] == '11 (Sebelas)'){ echo 'selected'; } ?>>11 (Sebelas)</option>
					<option value="12 (Dua Belas)" <?php if($data['anakKe'] == '12 (Dua Belas)'){ echo 'selected'; } ?>>12 (Dua Belas)</option>
					<option value="13 (Tiga Belas)" <?php if($data['anakKe'] == '13 (Tiga Belas)'){ echo 'selected'; } ?>>13 (Tiga Belas)</option>
					<option value="14 (Empat Belas)" <?php if($data['anakKe'] == '14 (Empat Belas)'){ echo 'selected'; } ?>>14 (Empat Belas)</option>
					<option value="15 (Lima Belas)" <?php if($data['anakKe'] == '15 (Lima Belas)'){ echo 'selected'; } ?>>15 (Delapan)</option>
					<option value="16 (Enam Belas)" <?php if($data['anakKe'] == '16 (Enam Belas)'){ echo 'selected'; } ?>>16 (Enam Belas)</option>
					<option value="17 (Tujuh Belas)" <?php if($data['anakKe'] == '17 (Tujuh Belas)'){ echo 'selected'; } ?>>17 (Tujuh Belas)</option>
					<option value="18 (Delapan Belas)" <?php if($data['anakKe'] == '18 (Delapan Belas)'){ echo 'selected'; } ?>>18 (Delapan Belas)</option>
					<option value="19 (Sembilan Belas)" <?php if($data['anakKe'] == '19 (Sembilan Belas)'){ echo 'selected'; } ?>>19 (Sembilan Belas)</option>
					<option value="20 (Dua Puluh)" <?php if($data['anakKe'] == '20 (Dua Puluh)'){ echo 'selected'; } ?>>20 (Dua Puluh)</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Lahir di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $data['lahirDi'];?>" /></td>
		</tr>
		<tr>
			<td>Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariLahir" value="<?php echo $data['hariLahir'];?>" /></td>
		</tr>
		<tr>
			<td>Pada Tanggal</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $data['tglLahir'];?>" /></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenKelamin" />
					<option value="Laki-Laki" <?php if($data['jenKelamin'] == 'Laki-Laki'){ echo 'selected'; } ?>>Laki-Laki</option>
					<option value="Perempuan" <?php if($data['jenKelamin'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaIbu" value="<?php echo $data['namaIbu'];?>" /></td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurIbu" value="<?php echo $data['umurIbu'];?>" /></td>
		</tr>
		<tr>
			<td>Alamat Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatIbu" value="<?php echo $data['alamatIbu'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaBapak" value="<?php echo $data['namaBapak'];?>" /></td>
		</tr>
		<tr>
			<td>Umur Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurBapak" value="<?php echo $data['umurBapak'];?>" /></td>
		</tr>
		<tr>
			<td>Alamat Bapak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatBapak" value="<?php echo $data['alamatBapak'];?>" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>