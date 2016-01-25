@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El álbum ha sido creado</p>
	</div>
@endif

<div class="container-fluid">
<p><a href="/validado/simulacros/crear-simulacro" class="btn btn-primary" role="button">Crear Simulacro</a></p>
@if(sizeof($simulacros) > 0)	
	@foreach($simulacros as $simulacro)
		<div class="row">
			<div class="row-sm-6 col-md-12">
				<div class="thumbnail">
					<div class="caption">
						<h3>{{$simulacro->nombre}}</h3>
						<p><a href="/validado/" class="btn btn-primary" role="button">Ver simulacro</a></p>
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
