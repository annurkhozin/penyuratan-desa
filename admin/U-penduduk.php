<?php
include "../inc/koneksi.php";
//tombol tambah sudah diklik?
if(isset($_POST['perbarui'])){
	//ambil masukan dari form
	$id=$_POST['id'];
	$noKK=$_POST['noKK'];
	$namaLengkap=$_POST['namaLengkap'];
	$nik=$_POST['nik'];
	$jenKelamin=$_POST['jenKelamin'];
	$tempatLahir=$_POST['tempatLahir'];
	$tglLahir=$_POST['tglLahir'];
	// $umur=$_POST['umur'];
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
	$update=mysql_query("UPDATE penduduk SET pendID='$id', noKK='$noKK', namaLengkap='$namaLengkap', nik='$nik', jenKelamin='$jenKelamin', tempatLahir='$tempatLahir', tglLahir='$tglLahir', agama='$agama', pendidikan='$pendidikan', jenPekerjaan='$jenPekerjaan', statusNikah='$statusNikah', statHubKel='$statHubKel', wargaNeg='$wargaNeg', noPaspor='$noPaspor', kitasKitap='$kitasKitap', namaAyah='$namaAyah', namaIbu='$namaIbu', alamat='$alamat', rt='$rt', rw='$rw', desaKel='$desaKel', kecamatan='$kecamatan', kabKota='$kabKota', kodePos='$kodePos', provinsi='$provinsi' WHERE pendID='$id'")or die(mysql_error());
	//periksa apakah berhasil?
	if($simpan){?>
		<script>document.location.href="?pages=Rpenduduk";</script><?php
	}else{?>
		<script>document.location.href="?pages=Upenduduk";</script><?php
	}
}
?>
<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3>
<hr/>
<div class="well well-sm"><?php
include('../inc/koneksi.php');
$id=$_GET['id'];
$show=mysql_query("SELECT*FROM penduduk WHERE pendID='$id'");
if(mysql_num_rows($show) == 0){
	echo '<script>window.history.back()</script>';
}else{
	$data=mysql_fetch_assoc($show);
}?>
<form action="" method="post" class="bg-info">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<table class="table table-condensed table-bordered table-striped">
		<tr>
			<td>Nomor KK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noKK" value="<?php echo $data['noKK'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaLengkap" value="<?php echo $data['namaLengkap'];?>" /></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="nik" value="<?php echo $data['nik'];?>" /></td>
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
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="tempatLahir" value="<?php echo $data['tempatLahir'];?>" /></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input class="form-control" type="date" name="tglLahir" value="<?php echo $data['tglLahir'];?>" /></td>
		</tr>
		<?php 
				$d=strtotime($data['tglLahir']);
				$date1 = date("Y-m-d",$d);
				$date2 = date("Y-m-d");
				$diff = abs(strtotime($date2) - strtotime($date1));

				$age = floor($diff / (365*60*60*24));
		?>
		<tr>
			<td>Umur</td>
			<td>:</td>
			<td><input class="form-control" readonly="" type="text" name="umur" value="<?php echo $age;?> Tahun" /></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td>
				<select class="form-control" name="agama" />
					<option value="Islam" <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
					<option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
					<option value="Katholik" <?php if($data['agama'] == 'Katholik'){ echo 'selected'; } ?>>Katholik</option>
					<option value="Hindu" <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
					<option value="Budha" <?php if($data['agama'] == 'Budha'){ echo 'selected'; } ?>>Budha</option>
					<option value="Konghucu" <?php if($data['agama'] == 'Konghucu'){ echo 'selected'; } ?>>Konghucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="pendidikan" />
					<option value="Tidak/Belum Sekolah" <?php if($data['pendidikan'] == 'Tidak/Belum Sekolah'){ echo 'selected'; } ?>>Tidak/Belum Sekolah</option>
					<option value="Belum Tamat SD/Sederajat" <?php if($data['pendidikan'] == 'Belum Tamat SD/Sederajat'){ echo 'selected'; } ?>>Belum Tamat SD/Sederajat</option>
					<option value="Tamat SD/Sederajat" <?php if($data['pendidikan'] == 'Tamat SD/Sederajat'){ echo 'selected'; } ?>>Tamat SD/Sederajat</option>
					<option value="SLTP/Sederajat" <?php if($data['pendidikan'] == 'SLTP/Sederajat'){ echo 'selected'; } ?>>SLTP/Sederajat</option>
					<option value="SLTA/Sederajat" <?php if($data['pendidikan'] == 'SLTA/Sederajat'){ echo 'selected'; } ?>>SLTA/Sederajat</option>
					<option value="Diploma" <?php if($data['pendidikan'] == 'Diploma'){ echo 'selected'; } ?>>Diploma</option>
					<option value="Sarjana" <?php if($data['pendidikan'] == 'Sarjana'){ echo 'selected'; } ?>>Sarjana</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenis Pekerjaan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="jenPekerjaan" />
					<option value="Belum/Tidak Bekerja" <?php if($data['jenPekerjaan'] == 'Belum/Tidak Bekerja'){ echo 'selected'; } ?>>Belum/Tidak Bekerja</option>
					<option value="Pelajar/Mahasiswa" <?php if($data['jenPekerjaan'] == 'Pelajar/Mahasiswa'){ echo 'selected'; } ?>>Pelajar/Mahasiswa</option>
					<option value="Mengurus Rumah Tangga" <?php if($data['jenPekerjaan'] == 'Mengurus Rumah Tangga'){ echo 'selected'; } ?>>Mengurus Rumah Tangga</option>
					<option value="Petani/Pekebun" <?php if($data['jenPekerjaan'] == 'Petani/Pekebun'){ echo 'selected'; } ?>>Petani/Pekebun</option>
					<option value="Pedagang" <?php if($data['jenPekerjaan'] == 'Pedagang'){ echo 'selected'; } ?>>Pedagang</option>
					<option value="Karyawan Swasta" <?php if($data['jenPekerjaan'] == 'Karyawan Swasta'){ echo 'selected'; } ?>>Karyawan Swasta</option>
					<option value="Wiraswasta" <?php if($data['jenPekerjaan'] == 'Wiraswasta'){ echo 'selected'; } ?>>Wiraswasta</option>
					<option value="Pegawai Negeri Sipil" <?php if($data['jenPekerjaan'] == 'Pegawai Negeri Sipil'){ echo 'selected'; } ?>>Pegawai Negeri Sipil</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Nikah</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statusNikah"/>
					<option value="Belum Kawin" <?php if($data['statusNikah'] == 'Belum Kawin'){ echo 'selected'; } ?>>Belum Kawin</option>
					<option value="Kawin" <?php if($data['statusNikah'] == 'Kawin'){ echo 'selected'; } ?>>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status Hubungan dlm Keluarga</td>
			<td>:</td>
			<td>
				<select class="form-control" name="statHubKel" />
					<option value="Kepala Keluarga" <?php if($data['statHubKel'] == 'Kepala Keluarga'){ echo 'selected'; } ?>>Kepala Keluarga</option>
					<option value="Istri" <?php if($data['statHubKel'] == 'Istri'){ echo 'selected'; } ?>>Istri</option>
					<option value="Anak" <?php if($data['statHubKel'] == 'Anak'){ echo 'selected'; } ?>>Anak</option>
					<option value="Cucu" <?php if($data['statHubKel'] == 'Cucu'){ echo 'selected'; } ?>>Cucu</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kewarganegaraan</td>
			<td>:</td>
			<td>
				<select class="form-control" name="wargaNeg" />
					<option value="WNI" <?php if($data['wargaNeg'] == 'WNI'){ echo 'selected'; } ?>>WNI</option>
					<option value="WNA" <?php if($data['wargaNeg'] == 'WNA'){ echo 'selected'; } ?>>WNA</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>No. Paspor</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="noPaspor" value="<?php echo $data['noPaspor'];?>" /></td>
		</tr>
		<tr>
			<td>KITAS / KITAP</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kitasKitap" value="<?php echo $data['kitasKitap'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaAyah" value="<?php echo $data['namaAyah'];?>" /></td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="namaIbu" value="<?php echo $data['namaIbu'];?>" /></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="alamat" value="<?php echo $data['alamat'];?>" /></td>
		</tr>
		<tr>
			<td>RT</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="rt" value="<?php echo $data['rt'];?>" /></td>
		</tr>
		<tr>
			<td>RW</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="rw" value="<?php echo $data['rw'];?>" /></td>
		</tr>
		<tr>
			<td>Desa / Kelurahan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="desaKel" value="<?php echo $data['desaKel'];?>" /></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kecamatan" value="<?php echo $data['kecamatan'];?>" /></td>
		</tr>
		<tr>
			<td>Kabupaten / Kota</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kabKota" value="<?php echo $data['kabKota'];?>" /></td>
		</tr>
		<tr>
			<td>Kode Pos</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="kodePos"  value="<?php echo $data['kodePos'];?>" /></td>
		</tr>
		<tr>
			<td>Provinsi</td>
			<td>:</td>
			<td><input class="form-control" type="text" name="provinsi" value="<?php echo $data['provinsi'];?>" /></td>
		</tr>
	</table>
	<input class="btn btn-success btn-sm" type="submit" name="perbarui" value="Perbarui">
	<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
</form>
</div>

<?php
include "../inc/footer.php";
?>