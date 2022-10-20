<!DOCTYPE >
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>L&M &mdash; Lista de Presentes </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	
	<!-- Animate.css')}} -->
	<link rel="stylesheet" href="{{ url ('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url ('assets/css/icomoon.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url ('assets/css/bootstrap.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ url ('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url ('assets/css/style.css')}}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>    

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
		body{
			background:linear-gradient(0deg, rgba(39, 21, 21, 0.849), rgb(43 41 41 / 95%)), url('../assets/images/img_bg_3.jpg');
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
		li {
			margin: 0 2px 0 2px;
		}
		li a {
			color: #fff !important;
			background: transparent !important;
			font-family: 'Playfair Display', serif !important;
			font-size: 12pt;
		}
		li a:hover {
			color: #F14E95 !important;
		}
	</style>
	</head>

	<body>
	<div class="fh5co-loader"></div>

	<div style="overflow-x: hidden" id="fontgeral">

	<div class="container">
		<header class="d-flex flex-wrap flex-column align-items-center justify-content-between py-3 mb-4">
			<ul class="nav border-bottom col-12 col-md-auto mx-auto mb-2 justify-content-center mb-md-0 wedding-font">
			<li><a href="/" class="nav-link px-2 gold-color" style="background: transparent">INÍCIO</a></li>
			<li><a href="/story" class="nav-link px-2 link-primary" style="background: transparent">NOSSA HISTÓRIA</a></li>
			<li><a href="/event" class="nav-link px-2 link-primary" style="background: transparent">O EVENTO</a></li>
			<li><a href="/presents" class="nav-link px-2 link-primary" style="background: transparent">LISTA DE PRESENTES</a></li>
			<li><a href="/galery" class="nav-link px-2 link-primary" style="background: transparent">GALERIA</a></li>
			
			<li><a href="/contact" class="nav-link px-2 link-primary" style="background: transparent">CONTATO</a></li>
			</ul>
		</header>
	</div>

    <div id="fh5co-event" role="banner"   data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<!-- <div class="row">
				<div class="col-md-7 col-md-offset-2 text-center fh5co-heading animate-box">
				</div>
			</div> -->
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="row justify-content-md-center">
							<div class="col-md-6 text-center d-flex flex-column">
								<div class="event-wrap animate-box-center">
									<h3>Lista de Presentes</h3>
									<p class="fs-4" style="font-family: Nunito !important">OLÁ CASO QUEIRA NOS PRESENTAR NESTE DIA TÃO IMPORTANTE DA NOSSA VIDA,PODERÁ ESCOLHER UM ITEM DA NOSSA LISTA. DESDE JÁ AGRADECEMOS!</p>
  									{{-- <label for="" style="font-family: Nunito; font-size: 14px !important" class="label-wedding gold-color fw-bold fs-5">SELECIONE UMA CATEGORIA:</label>          --}}
									<div class="d-flex flex-column btn-group dropup">
										<button class="btn btn-secondary col-md-8 mx-auto text-center btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Escolha uma Categoria
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											@foreach($categoriasMenu as $categoriasM)
											<a style="font-size: 25px" class="dropdown-item" href="categoria/ {{$categoriasM->id}}">{{$categoriasM->name}}</a>
											@endforeach
										</div>
									</div>	
  								</div>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  
	

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

</body>
</html>