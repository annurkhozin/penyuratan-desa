<?php
include "../inc/koneksi.php";
$level=$_SESSION['level'];
$username=$_SESSION['username'];

$show=mysql_query("SELECT*FROM user WHERE level='$level' AND username='$username'");
$r=mysql_fetch_array($show);

$userID=$r[userID];

if(isset($_POST['save'])){
	$fileName=$_FILES['Filegambar']['name'];
	//Simpan nama file kedalam Database
	$sql=mysql_query("INSERT INTO foto(gambar,userID) VALUES('$fileName','$userID')")or die(mysql_error());
	
	$namafolder="../pasfoto/"; //folder tempat menyimpan file
	if(!empty($_FILES["Filegambar"]["tmp_name"])){
		$jenis_gambar=$_FILES['Filegambar']['type'];
		if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png"){
			$gambar=$namafolder.basename($_FILES['Filegambar']['name']);
			if(move_uploaded_file($_FILES['Filegambar']['tmp_name'], $gambar)){
				echo"<script>alert('Foto anda telah berhasil diunggah!');history.go(-1);</script>";
			}else{
			echo "Gambar gagal dikirim";
			}
		}else{
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
		}
	}
}
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/>

<div class="col-sm-8">
<div class="panel panel-info">
	<div align="center" class="panel-heading">Profil</div>
		<div class="panel-body">
		<form action="" method="post" class="bg-info">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><?php echo $r[fullname]; ?></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><?php echo $r[level]; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $r[alamat]; ?></td>
			</tr>
			<tr>
				<td>Tempat/Tanggal Lahir</td>
				<td>:</td>
				<td><?php echo $r[tempatLahir].", ".$r[tglLahir]; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $r[jenKelamin]; ?></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><?php echo $r[umur]; ?></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><?php echo $r[agama]; ?></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td><?php echo $r[pendidikan]; ?></td>
			</tr>
			<tr>
				<td>Status Nikah</td>
				<td>:</td>
				<td><?php echo $r[statusNikah]; ?></td>
			</tr>
		</table>
		<a class="btn btn-warning" href="?pages=Uprofil&id=<?php echo $r[userID];?>"><span class="glyphicon glyphicon-pencil"></span> Sunting</a>
		</form>
		</div>
</div>
</div>

<div class="col-sm-4">

<div class="panel panel-info">
	<div align="center" class="panel-heading">Foto Profil</div>
		<div class="panel-body">
			<div align="center"><?php
				$q=mysql_query("SELECT*FROM user,foto WHERE user.userID='$userID' AND foto.userID=user.userID")or die(mysql_error());
				$foto=mysql_fetch_array($q);?>
				<p><img class="img-responsive img-circle" src="../pasfoto/<?php echo $foto[gambar];?>" width="100px" alt="" onerror="this.src='../pasfoto/user.jpg';"/></p>
				<p><?php echo $r[fullname]; ?></p>
			</div>
</div>
</div>
			
<div class="panel panel-info">
	<div align="center" class="panel-heading">Ganti Foto Profil</div>
		<div class="panel-body">
			<div class="well well-sm">
				<form action="" method="post" enctype="multipart/form-data" name="FormUpload" id="FormUpload">
				<label>Pilih File: </label><input type="file" name="Filegambar" id="Filegambar"><br/>
				<input class="btn btn-success btn-sm" type="submit" name="save" id="button" value="Unggah">
				</form>
				</div>
		</div>
</div>
</div>

<?php
include "../inc/footer.php";
?>