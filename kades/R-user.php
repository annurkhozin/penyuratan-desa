<?php
include "../inc/koneksi.php";
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/>

<div class="well well-sm">
<p>
<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)"><span class="glyphicon glyphicon-chevron-left"></span>Kembali</a>
<a class="btn btn-primary btn-sm" href="javascript:void(0);" onclick="window.open('PDFlistUser.php?kode=','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><span class="glyphicon glyphicon-print"></span> Cetak</a>
</p>
<form action="" method="post" class="bg-info">
<table class="table table-bordered table-striped table-hover">
	<tr style="color:#ffffff; font-size:18px;">
		<th bgcolor="#5bc0de">Nama Lengkap</th>
		<th bgcolor="#5bc0de">Username</th>
		<th bgcolor="#5bc0de">Password</th>
		<th bgcolor="#5bc0de">Level</th>
	</tr><?php
	//paging
	$per_page = 7;
	$page_query=mysql_query("SELECT COUNT(*) FROM user");
	$pages=ceil(mysql_result($page_query, 0) / $per_page);
	$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
	$start=($page - 1) * $per_page;
	$sql=mysql_query("SELECT*FROM user ORDER BY userID DESC LIMIT $start, $per_page")or die(mysql_error());
	while($r=mysql_fetch_array($sql)){?>
		<tr>
			<td><?php echo $r['fullname'];?></td>
			<td><?php echo $r['username'];?></td>
			<td><?php echo $r['password'];?></td>
			<td><?php echo $r['level'];?></td>
<?php
	}?>
	</tr>
</table>
</form><?php
if($pages >= 1 && $page <= $pages){
	for($x=1; $x<=$pages; $x++){
		echo ($x == $page) ? '<b><a class="btn btn-success btn-xs" href="?pages=Ruser&page='.$x.'">'.$x.'</a></b> ' : '<a class="btn btn-default btn-xs" href="?pages=Ruser&page='.$x.'">'.$x.'</a> ';
	}
}
?>
</div>

<?php
include "../inc/footer.php";
?>