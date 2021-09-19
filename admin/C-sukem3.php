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
$query=mysql_query("SELECT sukem.*, penduduk.noKK, penduduk.nik FROM penyuratan JOIN sukem ON sukem.id_penyuratan = penyuratan.id JOIN penduduk ON penduduk.nik = '$nik' WHERE penyuratan.nik='$nik' ")or die(mysql_error());

$row=mysql_fetch_array($query);?>

<input type="hidden" name="id_penyuratan" value="<?php echo $row['id_penyuratan']?>">
<input type="hidden" name="id_keperluan" value="4">
<input type="hidden" name="id_data" value="<?php echo $row['sukemID']?>">
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
			<td><input class="form-control" type="date" name="tglSukem" value='<?php echo $row['tglSukem'] != "" ? $row['tglSukem'] : date('Y-m-d') ;?>'/></td>
		</tr>
		<tr>
			<td>Nama Almarhum / Almarhumah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAlm" required value="<?php echo $row['namaAlm'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="jenKelamin" required value="<?php echo $row['jenKelamin'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAlm" required value="<?php echo $row['alamatAlm'];?>"/></td>
		</tr>
		<tr>
			<td>Wafat Pada Hari</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="hariWafat" required value="<?php echo $row['hariWafat'];?>"></td>
		</tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglWafat" required value="<?php echo $row['tglWafat'];?>"></td>
		</tr>
		</tr>
		<tr>
			<td>Wafat Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="wafatDi" required value="<?php echo $row['wafatDi'];?>"></td>
		</tr>
		<tr>
			<td>Sebab Wafat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="sebabWafat" required value="<?php echo $row['sebabWafat'];?>"></td>
		</tr>
	</table>

	<a class="btn btn-danger" href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Kembali</a>
	<input class="btn btn-success" type="submit" name="tambah" value="SIMPAN">
	
</form>	
</div>

<?php
include "../inc/footer.php";
?>