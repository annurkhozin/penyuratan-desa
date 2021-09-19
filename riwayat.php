
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
    <title>SILMAS :: Riwayat Permohonan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
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
		    <div style="max-width: 670px; background-color: white;" class="alert" >
                <div id="table_riwayat"></div>
                <div class="text-left">
                    <span style="color:red;"><b>Catatan*</b></span>
                    <ul>
                        <li>Anda tidak dapat membatalkan permohonan jika status sudah di proses.</li>
                        <li>Jika status sudah selesai, harap mengambil surat Anda di Balai Desa KASIMAN</li>
                    <ul>
                </div>
		    </div>
		</div>

		<div align="center" style="margin-bottom: 20px;">
			<a href="index.php" class="btn btn-info">Permohonan Baru</a>
		</div>
      		
    </div>
    </header>

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/sweetalert2.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>

    var device_id = localStorage.getItem("device_id");
    if(device_id == null){
        device_id = new Date().getTime()
        localStorage.setItem("device_id",device_id)
    }
    var url = "get-riwayat.php?device_id="+device_id;
    fetch(url)
    .then(resp => {
       return resp.text()
    })
    .then(data => {
        $('#table_riwayat').html(data)
    })
    .catch(error => {
        // handle the error
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