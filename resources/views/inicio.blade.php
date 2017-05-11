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
					Bienvenid@,  {{Auth::user()->nombre}}
				</div>

				@if (Auth::guest())	

				@elseif(Auth::user()->tipo === 'evaluarte')	

				@elseif(Auth::user()->tipo === 'estudiante')	

					<div class="row">	


						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/Mi saber aprueba') }}">	
											<img src="/imagenes/misaberaprueba.jpeg">
										</a>
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/informes/consultar-simulacro/Tu saber') }}">	
											<img alt="Tu saber" src="/imagenes/tu-saber.png">	
										</a>
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/informes/consultar-simulacro/3 4 5 6 7 8 9') }}">	
											<img src="/imagenes/saber-3-9.png">
										</a>								
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/informes/consultar-simulacro/saber 10 y 11 4 Preguntas Abiertas') }}">	
											<img src="/imagenes/saber10-11.png">
										</a>								
									</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/informes') }}">	
											<img src="/imagenes/saber-pro.png">
										</a>
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/informes') }}">	
											<img src="/imagenes/perfil-profesional.png">
										</a>
								</div>
						</div>
						
					</div>

				@elseif(Auth::user()->tipo === 'colegio')

					<div class="row">		
						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/tu saber') }}">	
											<img alt="Tu saber" src="/imagenes/tu-saber.png">	
										</a>
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/saber 4,6,7 y 8') }}">	
											<img src="/imagenes/saber-3-9.png">
										</a>								
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/saber 10 y 11 4 Preguntas Abiertas') }}">	
											<img src="/imagenes/saber10-11.png">
										</a>								
									</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/perfil profesional') }}">	
											<img src="/imagenes/perfil-profesional.png">
										</a>
								</div>
						</div>

						<div class="col-sm-4 col-md-offset-1">
								<div class="thumbnail">
										<a href="{{ url('/validado/albumes/consultar-albumes/saber pro') }}">	
											<img src="/imagenes/saber-pro.png">
										</a>
								</div>
						</div>


					</div>

				@endif

			</div>
		</div>
	</div>
</div>

@endsection