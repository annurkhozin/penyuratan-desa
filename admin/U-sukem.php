<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noSukem=$_POST['noSukem'];
	$tglSukem=$_POST['tglSukem'];
	$namaAlm=$_POST['namaAlm'];
	$jenKelamin=$_POST['jenKelamin'];
	$alamatAlm=$_POST['alamatAlm'];
	$hariWafat=$_POST['hariWafat'];
	$tglWafat=$_POST['tglWafat'];
	$wafatDi=$_POST['wafatDi'];
	$sebabWafat=$_POST['sebabWafat'];
	
	//update database
	$update=mysql_query("UPDATE sukem SET sukemID='$id', noSukem='$noSukem', tglSukem='$tglSukem', namaAlm='$namaAlm', jenKelamin='$jenKelamin', alamatAlm='$alamatAlm', hariWafat='$hariWafat', tglWafat='$tglWafat', wafatDi='$wafatDi', sebabWafat='$sebabWafat' WHERE sukemID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($update){?>
		<script>document.location.href="?pages=Rsukem";</script><?php
	}else{?>
		<script>document.location.href="?pages=Usukem";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM sukem WHERE sukemID='$id'");
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
			<td>Nomor Surat Kematian</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="sukemID" value="<?php echo $data['sukemID'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Surat Kematian</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglSukem" value="<?php echo $data['tglSukem'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Almarhum / Almarhumah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAlm" value="<?php echo $data['namaAlm'];?>" /></td>
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
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAlm" value="<?php echo $data['alamatAlm'];?>" /></td>
		</tr>
		<tr>
			<td>Wafat Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariWafat" value="<?php echo $data['hariWafat'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglWafat" value="<?php echo $data['tglWafat'];?>" /></td>
		</tr>
		</tr>
		<tr>
			<td>Wafat Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="wafatDi" value="<?php echo $data['wafatDi'];?>" /></td>
		</tr>
		<tr>
			<td>Sebab Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="sebabWafat" value="<?php echo $data['sebabWafat'];?>" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>