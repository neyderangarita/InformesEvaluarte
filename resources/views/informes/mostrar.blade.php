@extends('app')

@section('content')

<div class="container-fluid">
@if(sizeof($informes) > 0)	
	@foreach($informes as $index => $informe)
		@if($index%3 == 0)
		<div class="row">
		@endif
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">		
						<H3>Simularcro {{ $index+1 }}</H3>
						<p>Fecha aplicacíon: {{ $informe->FechaAplico }}</p>
						<p>Puntaje Total: {{ $informe->proTotal }}</p>
						<p><a href="/validado/informes/generar-informe/{{$informe->codigo_simulacro}}" class="btn btn-primary" role="button">Ver Simulacro</a></p>
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
