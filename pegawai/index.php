<?php
	session_start();
	include "../inc/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>SILMAS :: Home</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../favicon.ico" rel="shortcut icon">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

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
    <a href="?pages=home" onclick = $("#menu-close").click(); >Beranda</a>
    </li>
		<li>
    <a href="?pages=Rprofil" onclick = $("#menu-close").click(); >Profil</a>
    </li>
		<li>
    <a href="?pages=Cktp" onclick = $("#menu-close").click(); >Surat Pengajuan KTP</a>
    </li>
		<li>
    <a href="?pages=Csuket" onclick = $("#menu-close").click(); >Surat Keterangan</a>
    </li>
    <li>
    <a href="?pages=Csukel" onclick = $("#menu-close").click(); >Surat Kelahiran</a>
    </li>
    <li>
    <a href="?pages=Csukem" onclick = $("#menu-close").click(); >Surat Kematian</a>
    </li>
    <li>
    <a href="?pages=Csktm" onclick = $("#menu-close").click(); >SKTM</a>
    </li>
    <li>
    <a href="?pages=Cskck" onclick = $("#menu-close").click(); >SKCK</a>
    </li>
    <li>
    <a href="?pages=Csukeh" onclick = $("#menu-close").click(); >Surat Kehilangan</a>
    </li>
		<li>
    <a href="../logout.php" onclick = $("#menu-close").click(); >Keluar</a>
    </li>
    </ul>
    </nav>
    <header id="top" class="header2">
        <div class="text-vertical-center">
            
        </div>
    </header>
		<!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row"><font color="black">
              <div class="col-sm-3">
				<div class="panel panel-danger">
				<div class="panel-body" align="center">
					<h3 class="custom_font"><small>Sistem Informasi</small><br/>LAYANAN DESA</h3>
					<img class="img-responsive img-circle" width="150px" src="../img/logo.jpg">
					<p></p>
					<p>Desa Kasiman Kec. Kasiman-Bojonegoro</p><hr/>
					<font color="red"><?php echo gmdate("d M Y || H:i:s", time()+60*60*7); ?></font>
					</div>
				</div>
				<div class="panel panel-info">
				<div align="center" class="panel-heading">BASISDATA</div>
				<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a class="btn btn-success" href="?pages=Rpenduduk">Basisdata Penduduk</a></li>
				</ul>
				</div>
				</div>
				<div class="panel panel-info">
				<div align="center" class="panel-heading">ARSIP SURAT</div>
				<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a class="btn btn-primary" href="?pages=Rktp">Surat Pengajuan KTP</a></li>
					<li><a class="btn btn-primary" href="?pages=Rsuket">Surat Keterangan</a></li>
					<li><a class="btn btn-primary" href="?pages=Rsukel">Surat Kelahiran</a></li>
					<li><a class="btn btn-primary" href="?pages=Rsukem">Surat Kematian</a></li>
					<li><a class="btn btn-primary" href="?pages=Rsktm">Surat Ket. Tidak Mampu</a></li>
					<li><a class="btn btn-primary" href="?pages=Rskck">Surat Ket. Catatan Kepolisian</a></li>
					<li><a class="btn btn-primary" href="?pages=Rsukeh">Surat Kehilangan</a></li>
				</ul>
				</div>
				</div>			
			 </div>
							<div class="col-sm-9">
								<?php include "../inc/page.php";?>
							</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    
		
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
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