<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	$data_penyuratan["nik"] = $_GET['nik'];
	$data_penyuratan["id_keperluan"] = 4;
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
	$noSukem=$_POST['noSukem'];
	$tglSukem=date_format(date_create($_POST['tglSukem']),"Y-m-d");
	$namaAlm=$_POST['namaAlm'];
	$jenKelamin=$_POST['jenKelamin'];
	$alamatAlm=$_POST['alamatAlm'];
	$hariWafat=$_POST['hariWafat'];
	$tglWafat=date_format(date_create($_POST['tglWafat']),"Y-m-d");
	$wafatDi=$_POST['wafatDi'];
	$sebabWafat=$_POST['sebabWafat'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sukem VALUES(NULL, '$noSukem', '$tglSukem', '$namaAlm', '$jenKelamin', '$alamatAlm','$hariWafat', '$tglWafat', '$wafatDi', '$sebabWafat','$id_penyurataan')")or die(mysql_error());
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
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal Surat Kematian</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglSukem" value='<?php echo date('Y-m-d');?>'/></td>
		</tr>
		<tr>
			<td>Nama Almarhum / Almarhumah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAlm" required></td>
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
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAlm" required></td>
		</tr>
		<tr>
			<td>Wafat Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariWafat" required></td>
		</tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglWafat" required></td>
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