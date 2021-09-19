<?php
	session_start();
	include "../inc/koneksi.php";	
	function getPermohonanBaru(){
		$query = mysql_query("SELECT id FROM penyuratan WHERE LOWER(catatan) != LOWER('Selesai')") or die(mysql_error());
		return mysql_num_rows($query);
	}
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
    <link href="../css/sweetalert2.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../favicon.ico" rel="shortcut icon">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .bell{
      display:block;
      width: 40px;
      height: 40px;
      color: black;
      font-size: 40px;
      -webkit-animation: ring 4s .7s ease-in-out infinite;
      -webkit-transform-origin: 50% 4px;
      -moz-animation: ring 4s .7s ease-in-out infinite;
      -moz-transform-origin: 50% 4px;
      animation: ring 4s .7s ease-in-out infinite;
      transform-origin: 50% 4px;
    }

    @-webkit-keyframes ring {
      0% { -webkit-transform: rotateZ(0); }
      1% { -webkit-transform: rotateZ(30deg); }
      3% { -webkit-transform: rotateZ(-28deg); }
      5% { -webkit-transform: rotateZ(34deg); }
      7% { -webkit-transform: rotateZ(-32deg); }
      9% { -webkit-transform: rotateZ(30deg); }
      11% { -webkit-transform: rotateZ(-28deg); }
      13% { -webkit-transform: rotateZ(26deg); }
      15% { -webkit-transform: rotateZ(-24deg); }
      17% { -webkit-transform: rotateZ(22deg); }
      19% { -webkit-transform: rotateZ(-20deg); }
      21% { -webkit-transform: rotateZ(18deg); }
      23% { -webkit-transform: rotateZ(-16deg); }
      25% { -webkit-transform: rotateZ(14deg); }
      27% { -webkit-transform: rotateZ(-12deg); }
      29% { -webkit-transform: rotateZ(10deg); }
      31% { -webkit-transform: rotateZ(-8deg); }
      33% { -webkit-transform: rotateZ(6deg); }
      35% { -webkit-transform: rotateZ(-4deg); }
      37% { -webkit-transform: rotateZ(2deg); }
      39% { -webkit-transform: rotateZ(-1deg); }
      41% { -webkit-transform: rotateZ(1deg); }

      43% { -webkit-transform: rotateZ(0); }
      100% { -webkit-transform: rotateZ(0); }
    }

    @-moz-keyframes ring {
      0% { -moz-transform: rotate(0); }
      1% { -moz-transform: rotate(30deg); }
      3% { -moz-transform: rotate(-28deg); }
      5% { -moz-transform: rotate(34deg); }
      7% { -moz-transform: rotate(-32deg); }
      9% { -moz-transform: rotate(30deg); }
      11% { -moz-transform: rotate(-28deg); }
      13% { -moz-transform: rotate(26deg); }
      15% { -moz-transform: rotate(-24deg); }
      17% { -moz-transform: rotate(22deg); }
      19% { -moz-transform: rotate(-20deg); }
      21% { -moz-transform: rotate(18deg); }
      23% { -moz-transform: rotate(-16deg); }
      25% { -moz-transform: rotate(14deg); }
      27% { -moz-transform: rotate(-12deg); }
      29% { -moz-transform: rotate(10deg); }
      31% { -moz-transform: rotate(-8deg); }
      33% { -moz-transform: rotate(6deg); }
      35% { -moz-transform: rotate(-4deg); }
      37% { -moz-transform: rotate(2deg); }
      39% { -moz-transform: rotate(-1deg); }
      41% { -moz-transform: rotate(1deg); }

      43% { -moz-transform: rotate(0); }
      100% { -moz-transform: rotate(0); }
    }

    @keyframes ring {
      0% { transform: rotate(0); }
      1% { transform: rotate(30deg); }
      3% { transform: rotate(-28deg); }
      5% { transform: rotate(34deg); }
      7% { transform: rotate(-32deg); }
      9% { transform: rotate(30deg); }
      11% { transform: rotate(-28deg); }
      13% { transform: rotate(26deg); }
      15% { transform: rotate(-24deg); }
      17% { transform: rotate(22deg); }
      19% { transform: rotate(-20deg); }
      21% { transform: rotate(18deg); }
      23% { transform: rotate(-16deg); }
      25% { transform: rotate(14deg); }
      27% { transform: rotate(-12deg); }
      29% { transform: rotate(10deg); }
      31% { transform: rotate(-8deg); }
      33% { transform: rotate(6deg); }
      35% { transform: rotate(-4deg); }
      37% { transform: rotate(2deg); }
      39% { transform: rotate(-1deg); }
      41% { transform: rotate(1deg); }

      43% { transform: rotate(0); }
      100% { transform: rotate(0); }
    }
      .icon-badge-group {
      
      }

      .icon-badge-group .icon-badge-container {
          display: inline-block;
          margin-left:15px;
      }

      .icon-badge-group .icon-badge-container:first-child { 
        margin-left:0
      }

      .icon-badge-container {
          position:relative;
      }

      .icon-badge-icon {
          font-size: 30px;
          position: relative;
      }

      .icon-badge {
          background-color: red;
          font-size: 16px;
          color: white;
          text-align: center;
          width:20px;
          height:20px;
          border-radius: 35%;
          position: absolute; /* changed */
          top: -5px; /* changed */
          left: 18px; /* changed */
      }
    </style>
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
                <div class="panel panel-primary" align="center">
                    <div class="icon-badge-group"><a href="?pages=permohonan"> 
                    <h4>Permohonan SURAT
                        <div class="icon-badge-container" data-toggle="tooltip" data-placement="top" title="Jumlah surat yang belum selesai diproses">
                            <i class="bell fa fa-bell icon-badge-icon"></i>
                            <div class="icon-badge"><?php echo getPermohonanBaru()?></div>
                        </div>
                      </div>
                    </h4></a>
                </div>
        <div class="panel panel-primary">
				<div class="panel-body" align="center">
					<h3 class="custom_font"><small>Sistem Informasi</small><br/>LAYANAN DESA</h3>
					<img class="img-responsive img-circle" width="150px" src="../img/logoDesa.png">
					<p></p>
					<p>Desa Kasiman Kec. Kasiman-Bojonegoro</p><hr/>
    
					<font color="red"><?php echo gmdate("d M Y || H:i:s", time()+60*60*7); ?></font>
					</div>
				</div>
				<div class="panel panel-success">
				<div align="center" class="panel-heading">BASISDATA & AKUN</div>
				<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<li><a class="btn btn-success" href="?pages=Rpenduduk">Basisdata Penduduk</a></li>
					<li><a class="btn btn-success" href="?pages=Ruser">Akun Pengguna</a></li>
				</ul>
				</div>
				</div>
				<div class="panel panel-primary">
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
							<div class="col-xs-12 col-md-9">
								<?php include "../inc/page.php";?>
							</div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    
		
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script>
    $('[data-toggle="tooltip"]').tooltip('show');
    setTimeout(function(){ $('[data-toggle="tooltip"]').tooltip('hide'); }, 5000);
    $("form#form-surat").submit(function(e){
      e.preventDefault();
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
          const data = JSON.parse(resp)
          if(data.status == 'success'){
            Swal.fire({
              title: 'SUKSES!',
              text: "Pengajuan Surat Berhasil diproses",
              icon: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'CETAK'
            }).then((result) => {
              if (result.isConfirmed) {
                window.open(data.link)
              }
            })
          }else{
            Swal.fire(
              'GAGAL!',
              'Pengajuan Surat GAGAL diproses',
              'error'
            )
          }
        
        
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
      return false;
    })
    

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