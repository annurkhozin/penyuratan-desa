<?php
include "inc/koneksi.php";
$keperluan=$_GET['id_keperluan'];
$nik=$_GET['nik'];

$query=mysql_query("SELECT * FROM penduduk WHERE penduduk.nik='$nik'")or die(mysql_error());
$row=mysql_fetch_array($query);
$kk = $row['noKK'];
$query2=mysql_query("SELECT * FROM penduduk WHERE penduduk.noKK='$kk' AND penduduk.statHubKel='KEPALA KELUARGA'")or die(mysql_error());
$row2=mysql_fetch_array($query2);
$query3=mysql_query("SELECT * FROM penduduk WHERE penduduk.noKK='$kk' AND penduduk.statHubKel='ISTERI'")or die(mysql_error());
$row3=mysql_fetch_array($query3);?>

	<small class="form-text text-muted">Silahkan cek dan perbarui sesuai data terbaru Anda. Pastikan data anda benar.</small>

	<table class="table table-bordered table-condensed">
		<?php if($keperluan==1){?>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="jenKelamin">
					<option><?php echo $row['jenKelamin'];?></option>
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="status">
					<option><?php echo $row['statusNikah'];?></option>
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaan">
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
			<td>Alamat</td>
			<td>:</td>
			<td><textarea required class="form-control" name="alamat"><?php echo "Desa ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." DS. ".$row['desaKel']." KEC. ".$row['kecamatan']." KAB. ".$row['kabKota'];?></textarea>
			
		</tr>
		
		<tr>
			<td>Kepala Keluarga</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="kepKeluarga" value="<?php echo $row2['namaLengkap'];?>"/></td>
		</tr>








		<?php }else if($keperluan==2){ ?>
		<tr>
			<td>Jenis Surat</p>
			<td>:</td>
			<td>
				<select required class="form-control" name="jenisSuket">
					<option>SURAT KETERANGAN PENDUDUK</option>
					<option>SURAT KETERANGAN USAHA</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="jenKelamin">
					<option><?php echo $row['jenKelamin'];?></option>
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="status">
					<option><?php echo $row['statusNikah'];?></option>
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaan" required>
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
			<td>Alamat</td>
			<td>:</td>
			<td><textarea required class="form-control" name="alamat"><?php echo "Desa ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." DS. ".$row['desaKel']." KEC. ".$row['kecamatan']." KAB. ".$row['kabKota'];?></textarea>
			
		</tr>
		<tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><input required class="form-control" type="text" required name="keperluan"/></td>
		</tr>









		<?php }else if($keperluan==3){ ?>
		<tr>
			<td>Nama Lengkap Anak</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaAnak" required></td>
		</tr>
		<tr>
			<td>Anak ke</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="anakKe" >
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
			<td><input required class="form-control" type="text" name="lahirDi" required></td>
		</tr>
		<tr>
			<td>Pada Hari</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="hariLahir" required></td>
		</tr>
		<tr>
			<td>Pada Tanggal</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="jenKelamin" >
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaIbu" value="<?php echo $row3['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Umur Ibu</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="umurIbu" value="<?php echo $row3['umur'];?>" required></td>
		</tr>
		<tr>
			<td>Alamat Ibu</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="alamatIbu"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
			</td>
		</tr>
		
		<tr>
			<td>Nama Bapak</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaBapak" value="<?php echo $row2['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Umur Bapak</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="umurBapak" value="<?php echo $row2['umur'];?>" required></td>
		</tr>
		<tr>
			<td>Alamat Bapak</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="alamatBapak"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
			</td>
		</tr>








		<?php }else if($keperluan==4){ ?>
			
		<tr>
			<td>Nama Almarhum / Almarhumah</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaAlm"  value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="jenKelamin" value="<?php echo $row['jenKelamin'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="alamatAlm"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
		</td>
		</tr>
		<tr>
			<td>Wafat Pada Hari</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="hariWafat" required></td>
		</tr>
		<tr>
			<td>Tanggal Wafat</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglWafat" required></td>
		</tr>
		</tr>
		<tr>
			<td>Wafat Di</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="wafatDi" required></td>
		</tr>
		<tr>
			<td>Sebab Wafat</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="sebabWafat" required></td>
		</tr>










		<?php }else if($keperluan==5){ ?>
			<tr>
			<td>Nama Orang Tua</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaOrtu" value="<?php echo $row['namaAyah'];?>"/></td>
		</tr>
		
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
			<td><input required class="form-control" type="text" name="umurOrtu" value="<?php echo $age?> Tahun" required></td>
			</td>
		</tr>
		<tr>
			<td>Pekerjaan Orang Tua</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaanOrtu" >
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
			<td>
				<textarea required class="form-control" type="text" name="alamatOrtu"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
			</td>
		</tr>
		<tr>
			<td>Nama Anak</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="namaAnak" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Anak</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaanAnak" >
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
			<td>
				<textarea required class="form-control" type="text" name="alamatAnak"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
			</td>
		</tr>
		<tr>
			<td>Digunakan Untuk</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="ket" /></td>
		</tr>









		<?php }else if($keperluan==6){ ?>
			
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaan" >
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
			<td>Agama</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="agama" >
					<option><?php echo $row['agama'];?></option>
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
			<td>Status</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="status" >
					<option><?php echo $row['statusNikah'];?></option>
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pendidikan</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pendidikan" >
					<option><?php echo $row['pendidikan'];?></option>
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
			<td>No. KTP</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="noKtp" value="<?php echo $row['nik'];?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea required class="form-control" type="text" name="alamat" ><?php echo "Dsn. ".$row['alamat']." RT ".$row['rt']." RW ".$row['rw']." KEC. ".$row['desaKel']." KAB. ".$row['kabKota'];?></textarea></td>
		</tr>
			<td>Keperluan</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="keperluan" required></td>
		</tr>







		<?php }else if($keperluan==7){ ?>
			
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="nama" value="<?php echo $row['namaLengkap'];?>"/></td>
		</tr>
		<tr>
			<td>Lahir Di</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="lahirDi" value="<?php echo $row['tempatLahir'];?>"/></td>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><input required class="form-control" type="date" name="tglLahir" value="<?php echo $row['tglLahir'];?>"/></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="pekerjaan" >
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
			<td>Agama</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="agama" >
					<option><?php echo $row['agama'];?></option>
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
			<td>Status</td>
			<td>:</td>
			<td>
				<select required class="form-control" name="status" >
					<option><?php echo $row['statusNikah'];?></option>
					<option>Belum Kawin</option>
					<option>Kawin</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="alamat"><?php echo $row3['alamat']." RT ".$row['rt']." RW ".$row['rw']." ".$row['desaKel'].", ".$row['kabKota'];?></textarea>
			</td>
		</tr>
		<tr>
			<td>Kehilangan</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="kehilangan" required></td>
		</tr>
		<tr>
			<td>Atas Nama</td>
			<td>:</td>
			<td><input required class="form-control" type="text" name="atasNama" required></td>
		</tr>
		<tr>
			<td>Alamat Kehilangan</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="alamatKeh"></textarea>
			</td>
		</tr>
		<tr>
			<td>Lokasi Kehilangan</td>
			<td>:</td>
			<td>
				<textarea required class="form-control" type="text" name="lokKehilangan"></textarea>
			</td>
		</tr>
		<?php } ?>
		
	</table>
