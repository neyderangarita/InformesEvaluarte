@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El álbum ha sido creado</p>
	</div>
@endif

@if(Session::has('actualizado'))
	<div class="alert alert-success">
		<p>El álbum ha sido actualizado</p>
	</div>
@endif

@if(Session::has('eliminado'))
	<div class="alert alert-danger">
		<p>El álbum ha sido eliminado</p>
	</div>
@endif

<div class="container-fluid">
@if(Auth::user()->tipo === 'evaluarte')
<p><a href="/validado/albumes/crear-album" class="btn btn-primary" role="button">Crear informe</a></p>
@endif

@if(sizeof($albumes) > 0)
<div class="row">
	<div class="col-md-12">
		<h1>Listado informes de colegios</h1>
	</div>	
</div>
</br>

<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
    	<thead>
           <tr>
              <td>Nombre del informe</td>
              <td>Nombre de la prueba</td>
              <td>Acción</td>
              <td>Borrar</td>
          </tr>
        </thead>

		<tbody>
		@foreach($albumes as $index => $album)
		
	    <tr>
	        <td>{{$album->nombre}}</td>
	        <td>{{$album->descripcion}}</td>
	        <td>
	        	<center>
	        		<a href="/validado/fotos/admin-archivos?id={{$album->id}}" class="btn btn-primary" role="button">Ver</a>
	        		<a href="/validado/albumes/actualizar-album/{{$album->id}}" class="btn btn-success" role="button">Editar</a>			
	        	</center>
	        </td>
	        <td>
	        	<center>
	       		<form action="/validado/albumes/eliminar-album" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
						<input type="hidden" name="id" value="{{ $album->id }}" required>
						<input type="submit" class="btn btn-danger" role="button" value="Eliminar"/>	        		
				</form>	
				</center>
	        </td>        
	    </tr>		
		</tbody>
		@endforeach
	</table>

	<center>{!!$albumes->render()!!}</center>

@else
<div class="alert alert-danger">
	<p>Al parecer no tienes informes. Crea uno.</p>
</div>
@endif
</div>
@endsection