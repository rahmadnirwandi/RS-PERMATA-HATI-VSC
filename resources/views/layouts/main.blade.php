<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
	
    <!-- css -->
    <link href="backend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="backend/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="backend/plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="backend/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="backend/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="backend/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="backend/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="backend/css/animate.css" rel="stylesheet" />
    <link href="backend/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="backend/bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="backend/color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<p class="bold"><span id="tanggalwaktu"></span></p>
						<script>
							var tw = new Date();
							if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
							else (a=tw.getTime());
							tw.setTime(a);
							var tahun= tw.getFullYear ();
							var hari= tw.getDay ();
							var bulan= tw.getMonth ();
							var tanggal= tw.getDate ();
							var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
							var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
							document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+" Jam " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" WIB ");
							</script>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="backend/index.html">
                    <img src="backend/img/logoPH.png" alt="" width="130" height="55" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#doctor">Dokter</a></li>
				<li><a href="#facilities">Fasilitas</a></li>
				<li><a href="#tentangkami">Tentang Kami</a></li>
				<li><a href="#partner">Partner</a></li>
				<li class="dropdown">
				<a href="backend/#" class="dropdown-toggle " data-toggle="dropdown"><span class="badge custom-badge red pull-right"></span>Selanjutnya<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="backend/index.html">Masuk <i class="fa fa-sign-in"></i></a></li>
					<li><a href="backend/index-video.html">Daftar</a></li>
					<li><a href="#intro">Buat Janji atau Booking</a></li>
				</ul>
				</li>
			</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
    @yield('container')
	
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="backend/js/jquery.min.js"></script>	 
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/jquery.easing.min.js"></script>
	<script src="backend/js/wow.min.js"></script>
	<script src="backend/js/jquery.scrollTo.js"></script>
	<script src="backend/js/jquery.appear.js"></script>
	<script src="backend/js/stellar.js"></script>
	<script src="backend/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="backend/js/owl.carousel.min.js"></script>
	<script src="backend/js/nivo-lightbox.min.js"></script>
    <script src="backend/js/custom.js"></script>


</body>

</html>
