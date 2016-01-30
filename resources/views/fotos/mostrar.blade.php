@extends('app')

@section('content')
<div class="container-fluid">

@if(Auth::user()->tipo === 'evaluarte')
<p><a href="/validado/fotos/crear-foto?id={{$id}}" class="btn btn-primary" role="button">Cargar archivos</a></p>
@endif

@if(sizeof($fotos)>0)	
	@foreach($fotos as $index => $foto)
		@if($index%3 == 0)
		<div class="row">
		@endif
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="/imagenes/archivos.png" width="20%" height="20%" />
					<div class="caption">
						<h3>{{$foto->nombre}}</h3>
						<p>{{$foto->descripcion}}</p>
					</div>
					<p><a href="/validado/fotos/actualizar-foto/{{$foto->id}}" class="btn btn-primary" role="button">Actualizar archivos</a></p>

					<p><a href="{{$foto->ruta}}" class="btn btn-primary" target="_blank" role="button">Descargar</a></p>
				</div>
			</div>
		@if(($index+1)%3 == 0)
		</div>
		@endif
	@endforeach
@else
<div class="alert alert-danger">
	<p>Al parecer este informe no tiene archivos. Crea uno.</p>
</div>
@endif
</div>
@endsection