<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Apupal</title>
		<link href="{{url()}}/css/animate.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="{{url()}}/css/styles.css" rel="stylesheet" type="text/css">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url()}}/js/jquery.min.js"></script>
		<script src="{{url()}}/js/bootstrap.min.js"></script>
		<script src="{{url()}}/js/jquery.smooth-scroll.min.js"></script>
		<script src="{{url()}}/js/wow.min.js"></script>
		<script src="{{url()}}/js/jquery.validate.min.js"></script>
		<script src="{{url()}}/js/main.js"></script>
		<script>
			var urlBase = '{{url()}}';
			var maxScroll = {{$maxScroll}};
		</script>
	</head>
	<body class="{{Route::current()->getName()}}">
		<header class="hidden-xs">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-5">
						<a href="{{url()}}">
							<img src="{{url()}}/img/logo.png" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-sm-7">
						<p class="text-right menu">
							<a class="{{(Route::current()->getName() == 'inicio' ) ? 'active' : ''}}" href="{{url()}}">Inicio</a>
							<a class="{{(Route::current()->getName() == 'nosotros' ) ? 'active' : ''}}" href="{{url()}}/nosotros">Nosotros</a>
							<a class="{{(Route::current()->getName() == 'servicios' ) ? 'active' : ''}}" href="{{url()}}/servicios">Servicios</a>
							<a class="{{(Route::current()->getName() == 'galeria' ) ? 'active' : ''}}" href="#">Galería</a>
							<a class="{{(Route::current()->getName() == 'transparencia' ) ? 'active' : ''}}" href="{{url()}}/transparencia">Transparencia</a>
							<a class="{{(Route::current()->getName() == 'contacto' ) ? 'active' : ''}}" href="{{url()}}/contacto">Contacto</a>
						</p>
						<p class="text-right social">
							<a href="#">
								<img src="{{url()}}/img/social-facebook.png" alt="" class="img-responsive">
							</a>
							&nbsp;
							<a href="#">
								<img src="{{url()}}/img/social-youtube.png" alt="" class="img-responsive">
							</a>
						</p>
					</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-default hidden">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url()}}">
						<img src="{{url()}}/img/logo.png" alt="" class="img-responsive">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Inicio</a>
						</li>
						<li>
							<a href="#">Nosotros</a>
						</li>
						<li>
							<a href="#">Servicios</a>
						</li>
						<li>
							<a href="#">Galería</a>
						</li>
						<li>
							<a href="#">Transparencia</a>
						</li>
						<li>
							<a href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		@yield('contenido')
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>
							&copy; Copyright Apupal 2015  /  Todos los Derechos Reservados.
						</p>
						<p>
							Jr. Los Helenios 3843 piso 3, Urb. Las Palmeras - Los Olivos
						</p>
					</div>
					<div class="col-sm-6">
						<p>
							<img src="{{url()}}/img/logo-patmos.png" class="img-responsive pull-right" alt="">
						</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>