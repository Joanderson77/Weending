<!DOCTYPE html>
<html lang="pt-BR">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>L&M &mdash; Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	
	<!-- Animate.css')}} -->
	<link rel="stylesheet" href="{{ url ('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url ('assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url ('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ url ('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url ('assets/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<style>
    body{
        background:linear-gradient(0deg, rgba(39, 21, 21, 0.849), rgb(43 41 41 / 1%)), url('../assets/images/img_bg_2.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;  
    }
    .slick-dots li button, .slick-dots li.slick-active button:before{
        color: #fff !important;
    }
    .slick-dots li button:before{
        color: #8b8b8b !important;
    }

    @media  screen and (max-width: 767px){
        button.slick-next.slick-arrow, button.slick-prev.slick-arrow{
            display: none !important;
        }
    }

    .outer-border{
        width: 100%;
        max-width: 50vw;
    }

</style>
	

	<header id="fh5co-header" class="fh5co-cover" role="banner"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Larissa &amp; Mateus</h1>
							<h2>Estamos nos casando</h2>
							<div class="simply-countdown simply-countdown-one"></div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-center">
							<a href="/presents" class="btn btn-default btn-sm">Lista de presentes</a>
							<!-- <a href="/event" class="btn btn-default btn-sm">O evento</a> -->
							<a href="/story" class="btn btn-default btn-sm">Nossa História</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<footer class="background:linear-gradient(0deg, rgba(39, 21, 21, 0.849), rgb(43 41 41 / 1%))">
		
	</footer>

	<!-- <div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div> -->
	
	<!-- jQuery -->
	<script src="{{ url ('assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ url ('assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ url ('assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ url ('assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ url ('assets/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ url ('assets/js/jquery.countTo.js')}}"></script>

	<!-- Stellar -->
	<script src="{{ url ('assets/js/jquery.stellar.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ url ('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ url ('assets/js/magnific-popup-options.js')}}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js')}}"></script> -->
	<script src="{{ url ('assets/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{ url ('assets/js/main.js')}}"></script>

	<script>
    var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: 2022,
        month: 11,
        day: 15,
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: 2022,
        month: 11,
        day: 15,
        enableUtc: false
    });
</script>

	</body>
</html>

