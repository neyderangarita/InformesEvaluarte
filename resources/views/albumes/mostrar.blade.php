@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El álbum ha sido creado</p>
	</div>
@endif

<div class="container-fluid">
<p><a href="/validado/albumes/crear-album" class="btn btn-primary" role="button">Crear álbum</a></p>
@if(sizeof($albumes) > 0)	
	@foreach($albumes as $album)
		<div class="row">
			<div class="row-sm-6 col-md-12">
				<div class="thumbnail">
					<div class="caption">
						<h3>{{$album->nombre}}</h3>
						<p>{{$album->descripcion}}</p>
						<p><a href="/validado/fotos?id={{$album->id}}" class="btn btn-primary" role="button">Ver fotos</a></p>
						<p><a href="/validado/pdf?id={{$album->usuario_id}}" class="btn btn-primary" role="button">Ver reporte</a></p>
						<!-- <p><a href="/validado/pdf" class="btn btn-primary" role="button">Descargar</a></p> -->
					</div>
				</div>
			</div>
		</div>
	@endforeach
@else
<div class="alert alert-danger">
	<p>Al parecer no tienes albumes. Crea uno.</p>
</div>
@endif
</div>
@endsection
