<?php 
include "inc/koneksi.php";
?>
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="hidden-xs">NIK</th>
                <th>Keperluan</th>
                <th class="hidden-xs">Tanggal Pengajuan</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $device_id = $_GET['device_id'];
            $data = mysql_query("SELECT * FROM penyuratan WHERE device_id = '$device_id' ORDER BY tanggal_buat DESC") or die(mysql_error());
            $no = 1;
            $tooltip = true;
            while($row=mysql_fetch_array($data,MYSQL_ASSOC)){
                $id_penyuratan = $row['id'];
                if($row['id_keperluan'] == "1"){ 
                    $data2 = mysql_query("SELECT ktpID FROM ktp WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["ktpID"]; 
                    $keperluan = "Surat Pengajuan KTP";
                    $file = "PDFktp.php";
                }else if($row['id_keperluan'] == "2"){
                    $data2 = mysql_query("SELECT suketID FROM suket WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["suketID"];
                    $keperluan =  "Surat Keterangan";
                    $file = "PDFsuket.php";
                }else if($row['id_keperluan'] == "3"){
                    $data2 = mysql_query("SELECT sukelID FROM sukel WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["sukelID"];
                    $keperluan = "Surat Kelahiran";
                    $file = "PDFsukel.php";
                }else if($row['id_keperluan'] == "4"){
                    $data2 = mysql_query("SELECT sukemID FROM sukem WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["sukemID"];
                    $keperluan = "Surat Kematian";
                    $file = "PDFsukem.php";
                }else if($row['id_keperluan'] == "5"){
                    $data2 = mysql_query("SELECT sktmID FROM sktm WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["sktmID"];
                    $keperluan = "Surat Ket. Tidak Mampu" ;
                    $file = "PDFsktm.php";;
                }else if($row['id_keperluan'] == "6"){
                    $data2 = mysql_query("SELECT skckID FROM skck WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["skckID"];
                    $keperluan = "Surat Ket. Catatan Kepolisian";
                    $file = "PDFskck.php";
                }else if($row['id_keperluan'] == "7"){
                    $data2 = mysql_query("SELECT sukehID FROM sukeh WHERE id_penyuratan = '$id_penyuratan'") or die(mysql_error());
                    $row2=mysql_fetch_array($data2);
                    $id_data = $row2["sukehID"];
                    $keperluan = "Surat Kehilangan";
                    $file = "PDFsukeh.php";
                }else{
                    $file = "";;
                    $keperluan = "Lainnya";
                }
                ?>
            <tr>
                <td class="text-center"><?php echo $no;?></td>
                <td class="hidden-xs">
                <a class="btn btn-default btn-xs" href="javascript:void(0)" onclick="tampilkanKTP('<?php echo $row['ktp'];?>')"><i class="fa fa-image"></i> <?php echo $row['nik'];?></a>
                </td>
                <td><?php echo $keperluan;?></td>
                <td class="hidden-xs"><?php echo date_format(date_create($row['tanggal_buat']),"d M `y H:i");?></td>
                <td class="text-center">
                    <?php 
                        if($row['catatan']=="Diajukan"){?>
                            <span class="label label-default"><?php echo $row['catatan'];?></span>
                            <a href="del-riwayat.php?id=<?php echo $row['id']?>&keperluan=<?php echo $row['id_keperluan'];?>" onclick="return confirm('Batalkan permohonan?')" type="button" class="label label-danger" <?php if($tooltip==true){ echo 'data-toggle="tooltip" data-placement="top" title="Klik tombol untuk membatalkan Permohonan Anda"';}?>><i class="fa fa-close"></i> Batalkan</a>
                            <?php $tooltip = false; ?>
                        <?php }else if($row['catatan']=="Selesai"){ ?>
                            <span class="label label-success"><?php echo $row['catatan'];?></span>
                            <a href="admin/<?php echo $file;?>?kode=<?php echo $id_data?>" target="_blank">
                                <span class="label label-primary"> <i class="fa fa-print"></i> Cetak</span>
                            </a>
                        <?php }else if($row['catatan']=="Ditolak"){ ?>
                            <span class="label label-danger"><?php echo $row['catatan'];?></span>
                        <?php }else{ ?>
                            <span class="label label-primary"><?php echo $row['catatan'];?></span>
                        <?php }
                    ?>
                </td>
            </tr>
            <?php $no++; }?>
        </tbody>
    </table>
</div>
<script>
    $('[data-toggle="tooltip"]').tooltip('show');
    setTimeout(function(){ $('[data-toggle="tooltip"]').tooltip('hide'); }, 5000);
    function tampilkanKTP(name){
        Swal.fire({
            imageUrl: `uploads/${name}`,
            imageAlt: 'A tall image'
        })
    }
</script>