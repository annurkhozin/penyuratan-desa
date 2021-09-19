<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['noKK'];

//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
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
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sukem VALUES(NULL, '$noSukem', '$tglSukem', '$namaAlm', '$jenKelamin', '$alamatAlm','$hariWafat', '$tglWafat', '$wafatDi', '$sebabWafat')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rsukem";</script><?php
	}else{?>
		<script>document.location.href="?pages=Csukem";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well">
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
	<table class="table table-condensed table-bordered table-striped table-hover">
		<tr>
			<td>Tanggal Surat Kematian</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglSukem" value='<?php echo date('d-m-Y');?>'/></td>
		</tr>
		<tr>
			<td>Nama Almarhum / Almarhumah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAlm"  value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenKelamin" value="<?php echo $row['jenKelamin'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAlm" value="<?php echo $row['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?>"/></td>
		</tr>
		<tr>
			<td>Wafat Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariWafat" required></td>
		</tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglWafat" required></td>
		</tr>
		</tr>
		<tr>
			<td>Wafat Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="wafatDi" required></td>
		</tr>
		<tr>
			<td>Sebab Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="sebabWafat" required></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>	
</div>

<?php
include "../inc/footer.php";
?>