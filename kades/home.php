<?php
session_start();
include "../inc/koneksi.php";
if(!isset($_SESSION['username'])){
  die("Anda belum login");
}
if($_SESSION['level']!="Kades"){
    die("Anda bukan Kades");
}
?>
<div class="panel panel-primary">
	<div class="panel-heading">Setia Melayani Masyarakat</div>
	<div class="panel-body">
		<img class="img img-thumbnail" src="../img/balai_desa.jpg" width="100%" />
	</div>
</div>

<?php
include "../inc/footer.php";
?>