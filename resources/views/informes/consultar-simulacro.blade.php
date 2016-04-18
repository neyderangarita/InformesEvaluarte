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

		@if($informes[0]->simulacro == 'Tu saber')		
		<!--<div class="col-sm-6" style="text-align: center">
				<img src="/imagenes/prueba-tu-saber.png"  width="70%" height="70%" />
		    </div> -->					
			<div class="col-sm-6">
				<div class="thumbnail">
					<img src="/imagenes/prueba-tu-saber.png"  width="auto" height="auto" />
				</div>
			</div>

	    @else					 
			<div class="col-sm-6">
				<div class="thumbnail">
					<img src="/imagenes/otras-pruebas.jpg"  width="50%" height="auto" />
				</div>
			</div>
	    @endif

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
 						@if($informe->simulacro == 'Tu saber')					
 						<p><strong>Fecha Aplicación:</strong> {{ $informe->FechaAplico }}</p>
	 						@if($informe->grado == 'JARDÍN' || $informe->grado == 'PREJARDÍN' || $informe->grado == 'TRANSICIÓN')
	 							<p><strong>Total:</strong> {{ ($informe->proMat1 + $informe->proMat2 + $informe->proMat3) / 3}}</p>
								<p><a href="/validado/informes/generar-saber-basica/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>					
							@elseif($informe->grado == '10°' || $informe->grado == '11°')						    
								<p><strong>Total:</strong> {{ ($informe->proMat1 + $informe->proMat2 + $informe->proMat3 + $informe->proMat4 + $informe->proMat5) / 5}}</p>
								<p><a href="/validado/informes/generar-saber-superior/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@else
								<p><strong>Total:</strong> {{ ($informe->proMat1 + $informe->proMat2 + $informe->proMat3 + $informe->proMat4 + $informe->proMat5) / 5}}</p>	
								<p><a href="/validado/informes/generar-saber-media/{{$informe->id}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>						
							@endif
						@elseif($informe->simulacro == 'saber 10 y 11 4 Preguntas Abiertas' || $informe->simulacro == 'saber 4,6,7 y 8' || $informe->simulacro == 'saber 3_Nuevo' || $informe->simulacro == 'saber 5_Nuevo')					 
						<p><strong>Total:</strong> {{ $informe->proTotal }}</p>
						<p><strong>Fecha Aplicación:</strong> {{ $informe->FechaAplico }}</p>
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