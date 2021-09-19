
<?php 
include "inc/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>SILMAS :: Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/dropzone.min.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="favicon.ico" rel="shortcut icon">
    <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
    <li class="sidebar-brand">
    <a href="#top"  onclick = $("#menu-close").click(); >Menu Layanan</a>
    </li>
		<li>
    <a href="login.php" onclick = $("#menu-close").click(); >Login</a>
    </li>
	<li>
        <a href="index.php" onclick = $("#menu-close").click(); >Permohonan Baru</a>
    </li>
	<li>
        <a href="riwayat.php" onclick = $("#menu-close").click(); >Riwayat Permohonan</a>
    </li>
    <li>
    <a href="tentang.php" onclick = $("#menu-close").click(); >Tentang</a>
    </li>
    <li>
    <a href="galeri.php" onclick = $("#menu-close").click(); >Galeri Foto</a>
    </li>
    <li>
    <a href="kontak.php" onclick = $("#menu-close").click(); >Kontak</a>
    </li>
    </ul>

    </nav>
    <header id="top" class="header">
    <div class="text-vertical-center text-center">
      <div align="center"><img class="img-responsive img-circle" width="200px" src="img/logoDesa.png"></div>
      	<p></p>
		<h2>
			<font color="yellow">Sistem Informasi Layanan Administrasi Surat Desa<br/><small><font color="white">KANTOR BALAI DESA KASIMAN<br/>Jalan Pandawa No. 600 || Telepon (0353) 7763693 || Kode Pos 64621</font></small></font>
		</h2><br/>
		<div align="center">
			<form style="max-width: 600px;  background-color: white;" id="form-surat" action="simpan-pengajuan.php" class="alert" method="post" enctype="multipart/form-data">
				<div class="input-group">
				  <span class="input-group-addon">NIK</span>
				  <input type="number" class="form-control" onchange="changeNik()" id="nik" autocomplete="false" name="nik" required placeholder="Masukkan NIK">
				</div>
                <br/>
                <div class="form-group col-md-12">
                    <div class="alert alert-success col-md-6 col-md-offset-3" role="alert">
                        <label>Upload KTP</label>
                        <div class="dropzone upload-ktp"></div>
                    </div>
                    <input type="hidden" class="form-control" readonly name="ktp">
                </div>
				<br/>
                <div class="input-group">
				  <span class="input-group-addon">No.HP</span>
				  <input type="text" class="form-control" id="no_hp" autocomplete="false" name="no_hp" maxlength="20" required placeholder="Masukkan Nomor HP / Telephon">
				</div>
                <br/>
				<div class="input-group">
			        <input type="hidden" name="device_id" id="device_id">
				  <span class="input-group-addon">Surat</span>
				  <select class="form-control" name="id_keperluan" id="id_keperluan" onchange="getForm(this.value)" required>
				  	<option value="">Pilih Keperluan</option>
				  	<option value="1">Surat Pengajuan KTP</option>
				  	<option value="2">Surat Keterangan</option>
				  	<option value="3">Surat Kelahiran</option>
				  	<option value="4">Surat Kematian</option>
				  	<option value="5">Surat Ket. Tidak Mampu</option>
				  	<option value="6">Surat Ket. Catatan Kepolisian</option>
				  	<option value="7">Surat Kehilangan</option>
				  </select>
				</div>
                <br>
                <div id="form-data" align="left"></div>
				
                <div class="form-group" align="left">
                    <label class="checkbox-inline">
                        <input type="checkbox" required>Saya bertanggung jawab penuh atas kebenaran data diatas.
                    </label>
                </div>
				<div class="input-group">
					<br>
					<button type="submit" name="submit"  class="btn btn-lg btn-primary">KIRIM</button>
				</div>
			</form>
		</div>

		<div align="center" style="margin-bottom: 20px;">
			<a href="riwayat.php" class="btn btn-info">Lihat Riwayat</a>
		</div>
      		
    </div>
    </header>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/dropzone.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>

    var device_id = localStorage.getItem("device_id");
    if(device_id == null){
        device_id = new Date().getTime()
        localStorage.setItem("device_id",device_id)
    }
    document.getElementById("device_id").value = device_id

    function changeNik(){
        $('#form-data').html("")
        $('select[name=id_keperluan]').val("")
    }
    function getForm(id_keperluan){
        var nik = document.getElementById("nik").value
        if(nik){
            if(id_keperluan != null && id_keperluan != ""){
                var url = `get-form.php?id_keperluan=${id_keperluan}&nik=${nik}`;
                fetch(url)
                    .then(resp => {
                        return resp.text()
                    })
                    .then(data => {
                        $('#form-data').html(data)
                    })
            }else{
                $('#form-data').html("")
            }
        }else{
            alert("Silahkan masukkan No.KTP terlebih dahulu.")
        }
    }

    $("form#form-surat").submit(function(e){
        e.preventDefault();
        var ktp = $('input[name=ktp]').val()
        if(!ktp){
            Swal.fire(
                'KTP Kosong',
                'Harap upload KTP Anda terlebih dahulu',
                'error'
            )
        }else{

            const data = $(this).serializeArray()
            $.ajax({
                url: $(this).attr("action"),
                data: data,
                type:$(this).attr("method"),
                beforeSend: function() {
                    $("button").attr("disabled",true);
                },
                complete:function() {
                    $("button").attr("disabled",false);								
                },
                success:function(resp) {
                    console.log(resp)
                    
                    Swal.fire(
                        'SUKSES!',
                        'Pengajuan Surat Berhasil dilakukan. Anda dapat melihat Status Permohonan Anda',
                        'success'
                    ).then((result) => {
                        document.location.href="riwayat.php"
                    })
                
                
                },
                error:function(error) {
                    $("button").attr("disabled",false);
                    Swal.fire(
                        'GAGAL!',
                        'Pengajuan Surat gagal dilakukan',
                        'error'
                    )
                }
            })
        }
    return false;
    })
    Dropzone.autoDiscover = false;
    $(".upload-ktp").dropzone({ 
        url: "upload-ktp.php",
        paramName: "file",
        dictDefaultMessage: "<i class='fa fa-hand-o-up'></i> Klik / Letakkan foto KTP Anda di sini.",
        acceptedFiles: "image/*",
        ictInvalidFileType: "Tipe file tidak valid",
        addRemoveLinks: true,
        dictRemoveFile: "Hapus",
        dictRemoveFileConfirmation: "Hapus KTP?",
        height: 10,
        // maxFiles: 1,
        init: function () {
            this.on("success", function (file, response) {
                $('input[name=ktp]').val(response.trim())
            });
        
            this.on("error", function (file, error, xhr) {
                Swal.fire(
                    'Gagal!',
                    'Gagal mengunggah KTP',
                    'error'
                )
            });
        },
    });

    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>
</html>