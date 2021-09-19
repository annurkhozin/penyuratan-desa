<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['kk'];

//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	$data_penyuratan["nik"] = $_GET['nik'];
	$data_penyuratan["id_keperluan"] = 5;
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
	$noSktm=$_POST['noSktm'];
	$tglSktm=date_format(date_create($_POST['tglSktm']),"Y-m-d");
	$namaOrtu=$_POST['namaOrtu'];
	$umurOrtu=$_POST['umurOrtu'];
	$pekerjaanOrtu=$_POST['pekerjaanOrtu'];
	$alamatOrtu=$_POST['alamatOrtu'];
	$namaAnak=$_POST['namaAnak'];
	$lahirDi=$_POST['lahirDi'];
	$tglLahir=date_format(date_create($_POST['tglLahir']),"Y-m-d");
	$pekerjaanAnak=$_POST['pekerjaanAnak'];
	$alamatAnak=$_POST['alamatAnak'];
	$ket=$_POST['ket'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO sktm VALUES(NULL, '$noSktm', '$tglSktm', '$namaOrtu', '$umurOrtu', '$pekerjaanOrtu','$alamatOrtu', '$namaAnak', '$lahirDi', '$tglLahir', '$pekerjaanAnak', '$alamatAnak', '$ket','$id_penyurataan')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rsktm";</script><?php
	}else{?>
		<script>document.location.href="?pages=Csktm";</script><?php
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

	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Tanggal SKTM</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglSktm" value='<?php echo date('Y-m-d');?>'/></td>
		</tr>
		<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaOrtu" value="<?php echo $row['namaAyah'];?>"/></td>
		</tr>
		<?php $kk = $row['noKK'];
		$query=mysql_query("SELECT*FROM penduduk WHERE penduduk.noKK='$kk' AND LOWER(penduduk.statHubKel)= LOWER('KEPALA KELUARGA')")or die(mysql_error());
		$row2=mysql_fetch_array($query);?>
		<tr>
			<?php 
				$d=strtotime($row2['tglLahir']);
				$date1 = date("Y-m-d",$d);
				$date2 = date("Y-m-d");

				$diff = abs(strtotime($date2) - strtotime($date1));

				$age = floor($diff / (365*60*60*24));
			?>
			<td>Umur Orang Tua</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umurOrtu" value="<?php echo $age?> Tahun" required></td>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Orang Tua</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanOrtu" />
					<option><?php echo $row2['jenPekerjaan'];?></option>
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
			<td><input class="form-control" type="text" name="alamatOrtu" value="<?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAnak" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Anak</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pekerjaanAnak" />
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
			<td>Alamat Anak</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamatAnak" value="<?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?>"/></td>
		</tr>
		<tr>
			<td>Digunakan Untuk</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="ket" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>