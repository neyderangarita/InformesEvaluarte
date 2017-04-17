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
		<p>Registro eliminado correctamente.</p>
	</div>
@endif

<div class="container-fluid">
@if(Auth::user()->tipo === 'evaluarte')
<!-- <p><a href="/validado/albumes/crear-album" class="btn btn-primary" role="button">Crear informe</a></p> -->
@endif


<div class="row">
	<div class="col-md-12">
		<h1>Listado de resutados de simulacros</h1>
	</div>	
</div>
</br>

@if(sizeof($informes) > 0)
<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
    	<thead>
           <tr>
              <td>Codigo estudiante</td>
              <td>Simulacro</td>
              <td>Nombre estudiate</td>
              <td>Colegio</td>
              <td>Grado</td>
              <td>Ciudad</td>
              <td>Fecha</td>
              <td>Prueba</td>             
              <td>Puesto</td>
              <td>Acción</td>
          </tr>
        </thead>
		<tbody>
			@foreach($informes as $index => $informe)
			    <tr>
			    	<td>{{$informe->codigo}}</td>
			        <td>{{$informe->codigo_simulacro}}</td>
			        <td>{{$informe->NombreEstudiante}}</td>
			        <td>{{$informe->colegio}}</td>
			        <td>{{$informe->grado}}</td>	      
			        <td>{{$informe->ciudad}}</td>
			        <td>{{$informe->FechaAplico}}</td>
			        <td>{{$informe->simulacro}}</td>
			        <td>{{$informe->puesto}}</td>     
					<td>
						<form class="" action="/validado/informes/eliminar-informe" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
							<input type="hidden" name="id" value="{{ $informe->id }}" required>
							<input type="submit" class="btn btn-danger" role="button" value="Eliminar"/>
						</form>
					</td>
			    </tr>		
			@endforeach			
		</tbody>
	</table>
	<center>{!!$informes->render()!!}</center>

@else
<div class="alert alert-danger">
	<p>Al parecer no tienes informes</p>
</div>
@endif
</div>
@endsection