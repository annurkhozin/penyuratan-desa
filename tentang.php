<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>SILMAS v1.0 :: Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

<div class="container">
<h2 align="center" style="color:#ffffff;">Tentang Desa Kasiman</h2>
<div class="panel panel-primary">
	<div class="panel-heading"><h3>Cerita Singkat</h3></div>
	<div class="panel-body">
	<strong>Desa Kasiman</strong> adalah salah satu desa yang berada di Kecamatan Kasiman Kabupaten Bojonegoro Provinsi jawa Timur. Di desa Kasiman memiliki potensi sumber daya alam yang cukup memadai, contonya seperti banyaknya pesawahan yang terbentang cukup luas pada musim penghujan banyak ditanami padi, sehingga memberi panorama pemandangan yang lumayan bagus dipandang mata. Contoh lain memiliki potensi penghasilan semangka yang sudah sangat terkenal ke beberapa kabupaten lain. Sehingga para pembeli biasanya banyak berdatangan untuk membeli, baik untuk dikonsumsi sendiri maupun dijual kembali. Dan potensi yang lainnya juga masih banyak lagi. Inilah Desa Kasiman, desa kecil tempat kelahiran Ku.
	</div>
</div>
</div>

<div class="container">
<div class="panel panel-primary">
	<div class="panel-heading"><h3>Potensi Sumber Daya Alam</h3></div>
	<div class="panel-body">
	<strong>Desa Kasiman</strong> memiliki potensi sumber daya alam yang cukup memadai, contonya seperti banyaknya pesawahan yang terbentang cukup luas pada musim penghujan banyak ditanami padi, sehingga memberi panorama pemandangan yang lumayan bagus dipandang mata. Contoh lain memiliki potensi penghasilan semangka yang sudah sangat terkenal ke beberapa kabupaten lain. Sehingga para pembeli biasanya banyak berdatangan untuk membeli, baik untuk dikonsumsi sendiri maupun dijual kembali. Dan potensi yang lainnya juga masih banyak lagi.
	</div>
</div>
	<h2 align=""><a class="btn btn-danger" href="index.php"><span class="glyphicon glyphicon-chevron-left"></span>Kembali</a></h2>
</div>

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