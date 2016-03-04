@extends('app')

@section('content')
<div class="container-fluid">
@if(sizeof($informes) > 0)	
<div class="container-fluid">
	<div class="row">
	  	<div class="col-sm-6" id="perf_div">
			<?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
	  	</div>
	    <div class="col-sm-6" style="text-align: center">
			<img src="../imagenes/individual.jpg"  width="20%" height="20%" />
	    </div>
	</div>
</div>
<br>
	@foreach($informes as $index => $informe)
		@if($index%3 == 0)
		<div class="row">
		@endif
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">		
						<H3>Simulacro {{ $index+1 }}</H3>
						<p>Fecha aplicación: {{ $informe->FechaAplico }}</p>
						<p>Puntaje Total: {{ round(($informe->proMat4 * 3) * (5/13)) + round(($informe->proMat1 * 3) * (5/13)) + round(($informe->proMat5 * 3) * (5/13)) + round(($informe->proMat2* 3) * (5/13)) + round($informe->proMat3 * (5/13)) }}
						</p>
						@if($informe->grado == '10°' || $informe->grado == '11°')
							<p><a href="/validado/informes/generar-media-vocacional/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>					
						@elseif($informe->grado == '3°' || $informe->grado == '4°')						    
							<p><a href="/validado/informes/generar-basica-primaria/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
						@elseif($informe->grado == '5°' || $informe->grado == '6°' || $informe->grado == '7°' || $informe->grado == '8°' || $informe->grado == '9°')	
							<p><a href="/validado/informes/generar-basica-secundaria	/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
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