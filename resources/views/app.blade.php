<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Evaluarte</title>
	<link href="/css/app.css" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!--<a class="navbar-brand" href="#">
				<img src="imagenes/evaluarte-logo.png" style="width:200px"/>
				Simulacros Evaluarte (PDF)
				</a> -->

				<a href="http://gestorevaluarte.com">
					<img class="custom_logo ie_png" alt="Simulacros Evaluarte (PDF)" src="/imagenes/evaluarte-logo.png">
				</a>
				
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">			
					@if (Auth::guest())	
						<li><a href="{{ url('/validacion/inicio') }}">Inicio</a></li>				
					@elseif(Auth::user()->tipo === 'evaluarte')	
						<li><a href="{{ url('/') }}">Inicio</a></li>	
						<li><a href="{{ url('/validado/albumes/admin-informes') }}">Informes Administrador</a></li>
					@elseif(Auth::user()->tipo === 'estudiante')	
						<li><a href="{{ url('/validacion/inicio') }}">Inicio</a></li>
						<li><a href="{{ url('/validado/informes') }}">Basica Primaria</a></li>
						<li><a href="{{ url('/validado/informes') }}">Basica Secundaria</a></li>
						<li><a href="{{ url('/validado/informes') }}">Media vocacional</a></li>
					@elseif(Auth::user()->tipo === 'colegio')
						<li><a href="{{ url('/validacion/inicio') }}">Inicio</a></li>
						<li><a href="{{ url('/validado/albumes') }}">Informes Colegio</a></li>			
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/validacion/inicio') }}">Iniciar Sesión</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/validacion/salida') }}">Salir</a></li>
								@if (Auth::user()->tipo === 'colegio' )	
									<li><a href="{{ url('/validado/usuario/editar-perfil') }}">Actualizar Perfil</a></li>
								@endif
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- Scripts -->
	<script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
	<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/canvg.js"></script>
	<script type="text/javascript" src="http://canvg.googlecode.com/svn/trunk/rgbcolor.js"></script> 

	
</body>
</html>
