<?php
if(isset($_POST['submit'])){
	$cari=$_POST['cari'];
	$q="SELECT*FROM penduduk WHERE namaLengkap LIKE '%$cari%' ";
	$hasil=mysql_query($q);
	while($data=mysql_fetch_array($hasil)){
		echo $data['namaLengkap'];
		echo $data['nik'];
	}
}else{
	unset($_POST['submit']);
}	
?>
<form name="formcari" method="post" action="">
	<input class="form-control" type="text" name="cari" />
	<input class="btn btn-primary btn-sm" type="submit" name="submit" id="submit" value="CARI" />
</form>