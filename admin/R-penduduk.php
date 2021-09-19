<?php
include "../inc/koneksi.php";
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/>
<div class="panel panel-primary">
	<div class="panel-heading"><span class="glyphicon glyphicon-search"></span> Pencarian Cepat</div>
	<div class="panel-body" align="center">
		<form method="post" action="?pages=infoPenduduk">
			<div class="input-group">
				<input type="text" name="cari" class="form-control" placeholder="Pencarian nama penduduk...">
				<span class="input-group-btn"><input class="btn btn-success" type="submit" name="submit" value="Temukan!" /></span>
			</div>
		</form>
	</div>
</div>
<div class="well well-sm">
<p>
<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)"><span class="glyphicon glyphicon-chevron-left"></span>Kembali</a>
<a class="btn btn-primary btn-sm" href="?pages=Cpenduduk"><span class="glyphicon glyphicon-plus"></span> Baru</a>
</p>
<form action="" method="post" class="bg-info">
<table class="table table-bordered table-condensed table-striped table-hover">
	<tr style="color:#ffffff; font-size:18px;">
		<th bgcolor="#5bc0de">NIK</th>
		<th bgcolor="#5bc0de">Nama Lengkap</th>
		<th bgcolor="#5bc0de">Hub Keluarga</th>
		<th bgcolor="#5bc0de"><center>Opsi</center></th>
	</tr><?php
	//paging
	$per_page = 6;
	$page_query=mysql_query("SELECT COUNT(*) FROM penduduk");
	$pages=ceil(mysql_result($page_query, 0) / $per_page);
	$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start=($page - 1) * $per_page;
	$sql=mysql_query("SELECT*FROM penduduk ORDER BY namaLengkap ASC LIMIT $start, $per_page")or die(mysql_error());
	while($r=mysql_fetch_array($sql)){?>
		<tr>
			<td><?php echo $r['nik'];?></td>
			<td><?php echo $r['namaLengkap'];?></td>
			<td><?php echo $r['statHubKel'];?></td>
			<td align="center">
				<a class="btn btn-primary btn-xs" href="?pages=RdetailPenduduk&nik=<?php echo $r['nik'];?>"><span class="glyphicon glyphicon-print"></span></a>
				<a class="btn btn-warning btn-xs" href="?pages=Upenduduk&id=<?php echo $r[pendID];?>"><span class="glyphicon glyphicon-pencil"></span></a>
				<a class="btn btn-danger btn-xs" href="?pages=Dpenduduk&id=<?php echo $r[pendID];?>"><span class="glyphicon glyphicon-trash"></span></a>
			</td><?php
	}?>
	</tr>
</table>
</form><?php
if($pages >= 1 && $page <= $pages){
	for($x=1; $x<=$pages; $x++){
		echo ($x == $page) ? '<b><a class="btn btn-success btn-xs" href="?pages=Rpenduduk&page='.$x.'">'.$x.'</a></b> ' : '<a class="btn btn-default btn-xs" href="?pages=Rpenduduk&page='.$x.'">'.$x.'</a> ';
	}
}
?>
</div>

<?php
include "../inc/footer.php";
?>