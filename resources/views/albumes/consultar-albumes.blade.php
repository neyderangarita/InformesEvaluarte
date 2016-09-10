@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El informe ha sido creado</p>
	</div>
@endif
<div class="container-fluid">
	<div class="row">
	  <div class="col-sm-12" style="text-align: center">
		<img src="/imagenes/colegio.jpg"  width="40%" height="40%" />
	  </div>
	</div>
@if(Auth::user()->tipo === 'evaluarte')
<p><a href="/validado/albumes/crear-album" class="btn btn-primary" role="button">Crear informe</a></p>
@endif

@if(sizeof($albumes) > 0)	
	@foreach($albumes as $index => $album)
		@if($index%3 == 0)
		<div class="row">
		@endif
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>{{$album->nombre}}</h3>
						<p>{{$album->descripcion}}</p>
						<p><a href="/validado/fotos?id={{$album->id}}" class="btn btn-primary" role="button">Ver archivos</a></p>
					</div>
				</div>
			</div>
		@if(($index+1)%3 == 0)
		</div>
		@endif
	@endforeach

	{!!$albumes->render()!!}
@else
<div class="alert alert-danger">
	<p>Al parecer no tienes informes. Crea uno.</p>
</div>
@endif
</div>
@endsection
