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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="favicon.ico" rel="shortcut icon">
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
    <a href="index.php" onclick = $("#menu-close").click(); >Login</a>
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
    <div class="text-vertical-center">
      <div align="center"><img class="img-responsive img-circle" width="200px" src="img/logoDesa.png"></div><p></p>
			<h2><font color="yellow">Sistem Informasi Layanan Administrasi Surat Desa<br/><small><font color="white">KANTOR BALAI DESA KASIMAN<br/>Jalan Pandawa No. 600 || Telepon (0353) 7763693 || Kode Pos 64621</font></small></font></h2><br/>
      <div align="center">
        <form style="max-width: 400px;  background-color: white;" action="auth.php" class="alert" method="post">
          <?php if($_GET['status']=='fail!'){?>
            <div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              Username / Password Belum Sesuai
            </div>
          <?php }?>
          <div class="input-group">
            <span class="input-group-addon">Username</span>
            <input type="text" class="form-control" autocomplete="false" name="username" required placeholder="Username anda...">
          </div>
          <br/>
          <div class="input-group">
            <span class="input-group-addon">Password</span>
            <input type="text" class="form-control" autocomplete="false" name="password" required placeholder="Password anda...">
          </div>
          <br/>
          <div class="form-group">
            <select name="level" class="form-control" required>
              <option value="">Pilih Jabatan Anda</option>
              <option value="Pegawai">Pegawai</option>
              <option value="Kades">Kades</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <br>
          <div class="input-group">
            <br>
            <button type="submit" name="login"  class="btn btn-lg btn-primary">LOGIN</button>
          </div>
        </form>
      </div>
    </div>
    </header>

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
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