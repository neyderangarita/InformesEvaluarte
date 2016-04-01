@extends('app')

@section('content')

@if (Session::has('error'))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> Al parecer algo está mal.<br><br>
		{{Session::get('error')}}
	</div>
@endif

@if (Session::has('actualizado'))
	<div class="alert alert-success">
		<strong>Actualización de datos!</strong><br><br>
		{{Session::get('actualizado')}}
	</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio</div>
				<div class="panel-body">
					Bienvenido {{Auth::user()->nombre}}
				</div>

				@if (Auth::guest())	
				
				@elseif(Auth::user()->tipo === 'evaluarte')	

				@elseif(Auth::user()->tipo === 'estudiante')	

				<div class="row">		
					<div class="col-sm-4 col-md-offset-1">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/informes/consultar-simulacro/Tu saber') }}">	
										<img alt="Tu saber" src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">	
									</a>
									Tu Saber
								</div>
							</div>
					</div>

					<div class="col-sm-4 col-md-offset-1">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/informes/consultar-simulacro/saber 4,6,7 y 8') }}">	
										<img src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">
									</a>
									Simulacro Saber 3° a 9° 
								</div>
							</div>
					</div>

					<div class="col-sm-4 col-md-offset-1">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/informes/consultar-simulacro/saber 10 y 11 4 Preguntas Abiertas') }}">	
										<img src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">
									</a>
									Simulacro Saber 10° a 11° 
								</div>
							</div>
					</div>

					<div class="col-sm-4 col-md-offset-1">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/informes') }}">	
										<img src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">
									</a>
									Prueba de perfil profesional
								</div>
							</div>
					</div>

					<div class="col-sm-4 col-md-offset-1">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/informes') }}">	
										<img src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">
									</a>
									Prueba Saber Pro
								</div>
							</div>
					</div>
				</div>

				@elseif(Auth::user()->tipo === 'colegio')

				<div class="row">		
					<div class="col-sm-4 col-md-offset-1" style="">
							<div class="thumbnail">
								<div class="caption">	
									<a href="{{ url('/validado/albumes') }}">	
										<img src="http://evaluarte.edu.co/wp-content/uploads/2012/09/logo-evaluarte-web.jpg" style="width: 271px;">
									</a>
								</div>
							</div>
					</div>
				</div>
				@endif

			</div>
		</div>
	</div>
</div>
@endsection