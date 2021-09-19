<?php
include "../inc/koneksi.php";
$nik=$_GET['nik'];
$kk=$_GET['kk'];

$submit=$_POST['submit'];
$jenisSurat=$_POST['jenisSurat'];
if(isset($submit)){
	if($jenisSurat==1){?>
		<script>document.location.href="?pages=Cktp2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==2){?>
		<script>document.location.href="?pages=Csuket2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==3){?>
		<script>document.location.href="?pages=Csukel2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==4){?>
		<script>document.location.href="?pages=Csukem2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==5){?>
		<script>document.location.href="?pages=Csktm2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==6){?>
		<script>document.location.href="?pages=Cskck2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}else if($jenisSurat==7){?>
		<script>document.location.href="?pages=Csukeh2&nik=<?php echo $nik;?>&kk=<?php echo $kk;?>";</script><?php
	}
}else{
	unset($submit);
}
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/><?php

$sql=mysql_query("SELECT*FROM penduduk WHERE penduduk.nik='$nik'")or die(mysql_error());
$row=mysql_fetch_array($sql);
?>
<div class="panel panel-primary">
	<div class="panel-heading">NIK : <?php echo $nik;?></div>
	<div class="panel-body">
		<table>
			<tr>
				<td>Nama Penduduk</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['namaLengkap'];?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['jenKelamin'];?></td>
			</tr>
				<td>Tempat &amp; Tgl. Lahir</d>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['tempatLahir'].", ".$row['tglLahir'];?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['agama'];?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['pendidikan'];?></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['jenPekerjaan'];?></td>
			</tr>
			<tr>
				<td>Status Perkawinan</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['statusNikah'];?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['alamat']." RT ".$row['rt']." RW ".$row['rw']." DESA ".$row['desaKel'];?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><?php echo "KEC. ".$row['kecamatan']." KAB. ".$row['kabKota']." - ".$row['kodePos'];?></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['namaAyah'];?></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
				<td><?php echo $row['namaIbu'];?></td>
			</tr>
		</table>
	</div>
</div>
<div class="panel panel-success">
	<div class="panel-heading">Layanan Administrasi</div>
	<div class="panel-body">
		<form action="" method="POST">
			<select class="form-control" name="jenisSurat">
				<option value=1>Surat Pengajuan KTP</option>
				<option value=2>Surat Keterangan</option>
				<option value=3>Surat Kelahiran</option>
				<option value=4>Surat Kematian</option>
				<option value=5>Surat Keterangan Tidak Mampu</option>
				<option value=6>Surat Keterangan Catatan Kepolisian</option>
				<option value=7>Surat Kehilangan</option>
			</select><br/>
			<input type="submit" name="submit" class="btn btn-success btn-sm" value="Blanko" />
			<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)">&nbsp;&nbsp;Batal&nbsp;&nbsp;</a>
		</form>
	</div>
</div>

<?php
include "../inc/footer.php";
?>