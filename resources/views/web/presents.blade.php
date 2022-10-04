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
	
	<!-- Animate.css')}} -->
	<link rel="stylesheet" href="{{ url ('assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ url ('assets/css/icomoon.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ url ('assets/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ url ('assets/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ url ('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ url ('assets/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ url ('assets/css/style.css')}}">

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
      
    <script type="text/javascript">
        $(document).ready(()=>{
            $("#select").val('');
        });     
    </script>
    

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>

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

</style>
	<br>
	<div id="page" >
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li><a href="/">Inicio</a></li>
						<li><a href="/story" class="nav-link px-2 link-light">Nossa História</a></li>
						<li class="has-dropdown">
							<a href="/event">O evento</a>
			
						</li>
						<li class="has-dropdown">
						<a href="/galery">Galeria</a>
					
						</li>
                        <li><a href="/presents">Lista de Presentes</a></li>
						<li><a href="/contact">Contato</a></li>
                        
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

    <div id="fh5co-event" role="banner"   data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-2 text-center fh5co-heading animate-box">
				</div>
			</div>
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-3">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box-center">
									<h3>Lista de Presentes</h3>
					
									
									<p>OLÁ CASO QUEIRA NOS PRESENTAR NESTE DIA TÃO IMPORTANTE DA NOSSA VIDA,
                                            PODERÁ ESCOLHER UM ITEM DA NOSSA LISTA. DESDE JÁ AGRADECEMOS!</p>
                                  
                                            
  <label for="" class="label-wedding gold-color fw-bold fs-5">Escolha um item</label>         
  <table class="table table-bordered table-dark">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Descrição</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
	@foreach($itens as $iten)
	@if($iten->qtd>=1)
    <tr class="bg-warning">
      <td>{{$iten->description}}</td>
      <td>
	  <a class="btn btn-info"  onclick="return confirm('Confirma a escolha do item {{$iten->description}}')" href="concluir/{{ $iten->id }}">Escolher</a>
	  </td>
	  @endif
	  @endforeach
    </tr>
   
  </tbody>
</table>

	
											<!-- @foreach($itens as $iten)				
	<form  method="get" action="{{url('concluir', ['iten' =>$iten->id])}}">
		@endforeach
	<div class="row">										
	<div class="form-group">
		
   		 <label for="" class="label-wedding gold-color fw-bold fs-5">Escolha um item</label>
	
		<select id="select" name="iten" value="{{csrf_token()}}" required class="rounded-0 bg-transparent form-control form-control-lg fw-bold text-light"  aria-label=".form-control-lg example">
	
		<option value="" selected disabled>Selecione um item</option>
		@foreach($itens as $iten)	
		@if($iten->qtd >=1)
		<option class="text-dark" value="{{$iten->id}}">{{$iten->description}}</option>	
		@endif
		
		@endforeach	
				</select>
				<button href="concluir/{{ $iten->id }}" class="btn btn-danger" type="submit">Teste</button>
				<a class="btn btn-danger"  onclick="return confirm('Confirma a escolha do item {{$iten->description}}')" href="concluir/{{ $iten->id }}">Delete</a>
		
			
				<button href="concluir/{{ $iten->id }}" class="btn btn-danger" type="submit">Teste</button> -->
					
				
		
  								</div>
                                </div>
								<!-- </form> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <footer id="fh5co-footer" role="contentinfo">
		<div class="container">

		</div>
	</footer>
	

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