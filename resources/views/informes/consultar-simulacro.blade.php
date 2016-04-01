@extends('app')

@section('content')
<div class="container-fluid">
@if(sizeof($informes) > 0)	

<div class="container-fluid">
	<div class="row">
<!-- 	<center><h1>SIMULACROS PRESENTADOS</h1></center> -->
	   	<div class="col-sm-6" id="perf_div">
			<?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
		</div>

	    <div class="col-sm-6" style="text-align: center">
			<img src="/imagenes/individual.jpg"  width="20%" height="20%" />
	    </div>

	</div>
</div>
	@foreach($informes as $index => $informe)
		@if($index%3 == 0)
		<div class="row">
		@endif
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">	

					    <H3>Simulacro {{ $index+1 }}</H3>
						<!-- <p><strong>Tipo Simulacros:</strong> {{ $informe->simulacro }}</p> -->
						<p><strong>Total:</strong> {{ $informe->proTotal }}</p>
						<p><strong>Fecha Aplico:</strong> {{ $informe->FechaAplico }}</p>
 						
 						@if($informe->simulacro == 'Tu saber')
	 						@if($informe->grado == 'JARDÍN' || $informe->grado == 'PREJARDÍN' || $informe->grado == 'TRANSICIÓN')
								<p><a href="/validado/informes/generar-saber-basica/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>					
							@elseif($informe->grado == '10°' || $informe->grado == '11°')						    
								<p><a href="/validado/informes/generar-saber-superior/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@else	
								<p><a href="/validado/informes/generar-saber-media/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@endif
						@elseif($informe->simulacro == 'saber 10 y 11 4 Preguntas Abiertas' || $informe->simulacro == 'saber 4,6,7 y 8' || $informe->simulacro == 'saber 3_Nuevo' || $informe->simulacro == 'saber 5_Nuevo')					 
							@if($informe->grado == '10°' || $informe->grado == '11°')
								<p><a href="/validado/informes/generar-media-vocacional/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>					
							@elseif($informe->grado == '3°' || $informe->grado == '4°')						    
								<p><a href="/validado/informes/generar-basica-primaria/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@elseif($informe->grado == '5°' || $informe->grado == '6°' || $informe->grado == '7°' || $informe->grado == '8°' || $informe->grado == '9°')	
								<p><a href="/validado/informes/generar-basica-secundaria/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@endif	
						@endif
					</div>
				</div>
			</div>
		@if(($index+1)%3 == 0)
		</div>
		@endif
	@endforeach
@else
<div class="alert alert-danger">
	<p>Al parecer no tienes simulacros</p>
</div>
@endif
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
@endsection