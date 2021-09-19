<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['tambah'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noKK=$_POST['noKK'];
	$namaLengkap=$_POST['namaLengkap'];
	$nik=$_POST['nik'];
	$jenKelamin=$_POST['jenKelamin'];
	$tempatLahir=$_POST['tempatLahir'];
	$tglLahir=$_POST['tglLahir'];
	$umur=$_POST['umur'];
	$agama=$_POST['agama'];
	$pendidikan=$_POST['pendidikan'];
	$jenPekerjaan=$_POST['jenPekerjaan'];
	$statusNikah=$_POST['statusNikah'];
	$statHubKel=$_POST['statHubKel'];
	$wargaNeg=$_POST['wargaNeg'];
	$noPaspor=$_POST['noPaspor'];
	$kitasKitap=$_POST['kitasKitap'];
	$namaAyah=$_POST['namaAyah'];
	$namaIbu=$_POST['namaIbu'];
	$alamat=$_POST['alamat'];
	$rt=$_POST['rt'];
	$rw=$_POST['rw'];
	$desaKel=$_POST['desaKel'];
	$kecamatan=$_POST['kecamatan'];
	$kabKota=$_POST['kabKota'];
	$kodePos=$_POST['kodePos'];
	$provinsi=$_POST['provinsi'];
	
	//simpan database
	$simpan=mysql_query("INSERT INTO penduduk VALUES(NULL, '$noKK', '$namaLengkap', '$nik', '$jenKelamin', '$tempatLahir','$tglLahir', '$umur', '$agama', '$pendidikan', '$jenPekerjaan', '$statusNikah', '$statHubKel', '$wargaNeg', '$noPaspor', '$kitasKitap', '$namaAyah', '$namaIbu', '$alamat', '$rt', '$rw', '$desaKel', '$kecamatan', '$kabKota', '$kodePos', '$provinsi')")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rpenduduk";</script><?php
	}else{?>
		<script>document.location.href="?pages=Cpenduduk";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="panel panel-primary">
	<div class="panel-heading">Impor Basisdata Penduduk</div>
	<div class="panel-body">
		<form method="post" enctype="multipart/form-data" action="imporPenduduk.php">
		<table>
			<tr>
				<td><input name="fileexcel" type="file"></td>
				<td><input class="btn btn-info btn-sm" name="upload" type="submit" value="Unggah">&nbsp;<a class="btn btn-default btn-sm" href="../excel/format/formPenduduk.xls"/><img src="../img/ikon-excel.gif" width="20px" /> Unduh form</a></td>
			</tr>
		</table>
		</form>
	</div>
</div>
<div class="well">
<form action="" method="post" class="bg-info">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Nomor KK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noKK" required></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaLengkap" required></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nik" required></td>
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
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tempatLahir" required></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tglLahir" required></td>
		</tr>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="umur" required></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
				<select class="form-control" name="agama" />
					<option>Islam</option>
					<option>Kristen</option>
					<option>Katholik</option>
					<option>Hindu</option>
					<option>Budha</option>
					<option>Konghucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pendidikan" />
					<option>Tidak/Belum Sekolah</option>
					<option>Belum Tamat SD/Sederajat</option>
					<option>Tamat SD/Sederajat</option>
					<option>SLTP/Sederajat</option>
					<option>SLTA/Sederajat</option>
					<option>Diploma</option>
					<option>Sarjana</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenis Pekerjaan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenPekerjaan" />
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
			<td>Status Nikah</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statusNikah" />
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Hubungan dlm Keluarga</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statHubKel" />
					<option>Kepala Keluarga</option>
					<option>Istri</option>
					<option>Anak</option>
					<option>Cucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="wargaNeg" />
					<option>WNI</option>
					<option>WNA</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No. Paspor</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noPaspor" value="--"/></td>
		</tr>
		<tr>
			<td>KITAS / KITAP</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kitasKitap" value="--"/></td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAyah" required></td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaIbu" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" required></td>
		</tr>
		<tr>
			<td>RT</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="rt" required></td>
		</tr>
		<tr>
			<td>RW</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="rw" required></td>
		</tr>
		<tr>
			<td>Desa / Kelurahan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="desaKel" value="Kasiman"/></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kecamatan" value="Kasiman" /></td>
		</tr>
		<tr>
			<td>Kabupaten / Kota</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kabKota" value="Bojonegoro"/></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kodePos" value="62164" /></td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="provinsi" value="Jawa Timur" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="tambah" value="Tambah">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>