<?php
include "../inc/koneksi.php";
?>

<h2 class="custom_font" style="color:#ffffff;"><?php echo $judul;?></h2>
<h3 class="custom_font" style="color:#ffffff;"><?php echo $subjudul;?></h3><hr/>

<div class="well well-sm">
<p>
<a class="btn btn-danger btn-sm" href="javascript:history.go(-1)"><span class="glyphicon glyphicon-chevron-left"></span> Kembali</a>
<a class="btn btn-primary btn-sm" href="javascript:void(0);" onclick="window.open('PDFlistKtp.php?kode=','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><span class="glyphicon glyphicon-print"></span> Cetak</a>
</p>
<form action="" method="post" class="bg-info">
<table class="table table-bordered table-condensed table-striped table-hover">
	<tr style="color:#ffffff; font-size:18px;">
		<th bgcolor="#5bc0de">Tanggal Surat</th>
		<th bgcolor="#5bc0de">Nama Lengkap</th>
		<th bgcolor="#5bc0de">Kepala Keluarga</th>
		<th bgcolor="#5bc0de"><center>Opsi</center></th>
	</tr><?php
	$sql=mysql_query("SELECT * FROM ktp WHERE tglKtp IS NOT NULL ORDER By ktpID DESC")or die(mysql_error());
	while($r=mysql_fetch_array($sql)){?>
		<tr>
			<td><p><?php echo $r[tglKtp];?></p></td>
			<td><p><?php echo $r[nama];?></p></td>
			<td><p><?php echo $r[kepKeluarga];?></p></td>
			<td align="center">
				<a class="btn btn-primary btn-xs" href="javascript:void(0);" onclick="window.open('PDFktp.php?kode=<?php echo $r['ktpID']; ?>','nama_window_pop_up','size=800,height=800,scrollbars=yes,resizeable=no')"><span class="glyphicon glyphicon-print"></span></a>
				<a class="btn btn-warning btn-xs" href="?pages=Uktp&id=<?php echo $r[ktpID];?>"><span class="glyphicon glyphicon-pencil"></span></a>
				<a class="btn btn-danger btn-xs" href="?pages=Dktp&id=<?php echo $r[ktpID];?>"><span class="glyphicon glyphicon-trash"></span></a>
			</td><?php
	}?>
	</tr>
</table>
</form>
</div>

<?php
include "../inc/footer.php";
?>