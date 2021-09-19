<?php
session_start();
include "../inc/koneksi.php";
if(!isset($_SESSION['username'])){
  die("Anda belum login");
}
if($_SESSION['level']!="Admin"){
    die("Anda bukan Admin");
}
$cari = $_GET['cari'];
?>

<div class="panel panel-primary">
<div class="panel-heading text-center">DATA PERMOHONAN MASYARAKAT</div>
	<div class="panel-body" align="center">
		<form method="GET" action="">
			<div class="input-group col-md-6" data-toggle="tooltip" data-placement="top" title="Pencarian pintas data Permohonan SURAT">
				<input type="hidden" name="pages" value="permohonan">
				<input type="text" name="cari" class="form-control" placeholder="Masukkan NIK / No.Hp Pemohon" value="<?php echo $cari?>">
				<span class="input-group-btn"><input class="btn btn-success" type="submit" name="submit" value="Temukan!" /></span>
			</div>
		</form>
	</div>
</div>
<div class="well well-sm">
<div class="bg-info">
	<table class="table table-bordered table-condensed table-striped table-hover">
		<thead>
			<tr style="color:#ffffff; font-size:18px;">
				<th bgcolor="#5bc0de" class="text-center">No</th>
				<th bgcolor="#5bc0de">NIK (KTP)</th>
				<th bgcolor="#5bc0de">No.HP</th>
				<th bgcolor="#5bc0de">Keperluan</th>
				<th bgcolor="#5bc0de">Tanggal Pengajuan</th>
				<th class="text-center" bgcolor="#5bc0de">Status</th>
				<th class="text-center" bgcolor="#5bc0de">Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php
		//paging
		if($_POST['comment']){
			$id = $_POST['id'];
			$comment = $_POST['comment'];
			$data = mysql_query("UPDATE penyuratan SET catatan='$comment' WHERE id='$id'") or die(mysql_error());
			$_POST = array();
		}
		

		$per_page = 10;
		if($cari){
			$page_query = mysql_query("SELECT COUNT(*) FROM penyuratan WHERE nik LIKE '%$cari%' OR no_hp LIKE '%$cari%' ");
		}else{
			$page_query = mysql_query("SELECT COUNT(*) FROM penyuratan");	
		}
		$pages=ceil(mysql_result($page_query, 0) / $per_page);
		$page=(isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start=($page - 1) * $per_page;
		if($cari){
			$data = mysql_query("SELECT * FROM penyuratan WHERE nik LIKE '%$cari%' OR no_hp LIKE '%$cari%' ORDER BY tanggal_buat DESC LIMIT $start, $per_page") or die(mysql_error());	
		}else{
			$data = mysql_query("SELECT * FROM penyuratan ORDER BY tanggal_buat DESC LIMIT $start, $per_page") or die(mysql_error());	
		}
		$no = 1;
		while($row = mysql_fetch_array($data)){?>
		<?php 
			if($row['id_keperluan'] == "1"){ 
				$keperluan = "Surat Pengajuan KTP";
			}else if($row['id_keperluan'] == "2"){
				$keperluan =  "Surat Keterangan";
			}else if($row['id_keperluan'] == "3"){
				$keperluan = "Surat Kelahiran";
			}else if($row['id_keperluan'] == "4"){
				$keperluan = "Surat Kematian";
			}else if($row['id_keperluan'] == "5"){
				$keperluan = "Surat Ket. Tidak Mampu" ;
			}else if($row['id_keperluan'] == "6"){
				$keperluan = "Surat Ket. Catatan Kepolisian";
			}else if($row['id_keperluan'] == "7"){
				$keperluan = "Surat Kehilangan";
			}else{
				$keperluan = "Lainnya";
			}
			if($no==1){ $tooltip_status = 'data-toggle="tooltip" data-placement="left" title="Klik untuk mengubah STATUS PERMOHONAN"';}else{$tooltip_status=null;}
		?>
			<tr>
				<td class="text-center"><?php echo $no;?></td>
				<td>
					<a class="btn btn-default btn-xs" href="javascript:void(0)" onclick="tampilkanKTP('<?php echo $row['ktp'];?>')" <?php if($no==1){ echo 'data-toggle="tooltip" data-placement="top" title="Klik NIK untuk melihat foto KTP"';}?>><i class="fa fa-image"></i> <?php echo $row['nik'];?></a>
				</td>
				<td><?php echo $row['no_hp'];?></td>
				<td><?php echo $keperluan;?></td>
				<td><?php echo date_format(date_create($row['tanggal_buat']),"d M Y H:i:s");?></td>
				<td class="text-center" ><div <?php echo $tooltip_status;?> >
					<?php 	
						if($row['catatan']=="Diajukan"){ ?>
							<span class="btn label label-default" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>"><?php echo $row['catatan'];?></span>
						<?php }else if($row['catatan']=="Selesai"){ ?>
							<span class="btn label label-success" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>"><?php echo $row['catatan'];?></span>
						<?php }else if($row['catatan']=="Ditolak"){ ?>
							<span class="btn label label-danger" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>"><?php echo $row['catatan'];?></span>
						<?php }else{ ?>
							<span class="btn label label-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>"><?php echo $row['catatan'];?></span>
						<?php }
						if($no==1){ $tooltip_print = 'data-toggle="tooltip" data-placement="top" title="Klik untuk mencetak SURAT"';}else{$tooltip_print=null;}
					?>
					</div>
				</td>
				<td class="text-center"> <div ></div>	
					<?php 
						if($row['id_keperluan'] == "1"){
							$to_pages = "Cktp3";
						}else if($row['id_keperluan'] == "2"){
							$to_pages =  "Csuket3";
						}else if($row['id_keperluan'] == "3"){
							$to_pages = "Csukel3";
						}else if($row['id_keperluan'] == "4"){
							$to_pages = "Csukem3";
						}else if($row['id_keperluan'] == "5"){
							$to_pages = "Csktm3" ;
						}else if($row['id_keperluan'] == "6"){
							$to_pages = "Cskck3";
						}else if($row['id_keperluan'] == "7"){
							$to_pages = "Csukeh3";
						}
						$no++;
					?>
					<!-- Modal -->
					<div class="modal fade" id="myModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action=""  method="post">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Komentari Permohonan</h4>
								</div>
								<div class="modal-body">
									<button type="button" style="border-radius: 28px!important;" onclick="setComment('Diproses','comment<?php echo $row['id'];?>')" class="btn btn-default btn-sm">Diproses</button>
									<button type="button" style="border-radius: 28px!important;" onclick="setComment('Ditolak','comment<?php echo $row['id'];?>')" class="btn btn-default btn-sm">Ditolak</button>
									<button type="button" style="border-radius: 28px!important;" onclick="setComment('Selesai','comment<?php echo $row['id'];?>')" class="btn btn-default btn-sm">Selesai</button>
									<p>Klik pintas komentar diatas atau kustom inputan dibawah</p>
									<input type="hidden" required value="<?php echo $row['id'];?>" name="id" />
									<input type="text" required class="form-control" id="comment<?php echo $row['id'];?>" autocomplete="false" name="comment" required placeholder="Masukkan komentar ke pemohon">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Batal</button>
									<button type="submit" name="submit_comment" class="btn btn-primary btn-sm">Kirim</button>
								</div>
								</form>
							</div>
						</div>
					</div>
					<a class="btn btn-primary btn-xs" href="?pages=<?php echo $to_pages;?>&nik=<?php echo $row['nik'];?>&penyuratan=<?php echo $row['id'];?>" <?php echo $tooltip_print?>><span class="glyphicon glyphicon-print"></span></a>
				</td>
			</tr>
			<?php
		}?>
		</tbody>
	</table>
</div>
<?php
if($pages >= 1 && $page <= $pages){
	for($x=1; $x<=$pages; $x++){
		echo ($x == $page) ? '<b><a class="btn btn-success btn-xs" href="?pages=permohonan&page='.$x.'">'.$x.'</a></b> ' : '<a class="btn btn-default btn-xs" href="?pages=Rpenduduk&page='.$x.'">'.$x.'</a> ';
	}
}
?>
</div>

<?php
include "../inc/footer.php";
?>

<script>
	
	function setComment(value, target){
		document.getElementById(target).value = value;
	}
	function tampilkanKTP(name){
        Swal.fire({
            imageUrl: `../uploads/${name}`,
            imageAlt: 'Foto KTP'
        })
    }
</script>