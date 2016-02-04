@extends('app')

@section('content')
<div class="container-fluid">
	

@if(sizeof($informes) > 0)	

<div id="perf_div"></div>
<?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
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
						<p><a href="/validado/informes/generar-informe/{{$informe->codigo}}/{{$informe->codigo_simulacro}}" target="_blank" class="btn btn-primary" role="button">Ver Simulacro</a></p>					
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
@endsection
