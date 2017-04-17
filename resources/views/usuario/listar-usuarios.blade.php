@extends('app')

@section('content')

<div class="container-fluid">
@if(sizeof($usuarios) > 0)
<div class="row">
	<div class="col-md-12">
		<h1>Listado de usuarios</h1>
	</div>	
</div>
</br>

<div class="table-responsive">

    <table class="table table-striped">
	    <thead>
		  <tr>	
		  	<th>Id</th>
		    <th>Nombre</th>
		    <th>Usuario</th>
		    <th>Contraseña</th>
		    <th>Tipo</th>
		    <th>Pregunta</th>
		    <th>Respuesta</th>
		  </tr>
		</thead>
		@foreach($usuarios as $index => $usuario)	
		<tbody>
		  <tr>
		    <td>{{$usuario->id}}</td>
		    <td>{{$usuario->nombre}}</td>
		    <td>{{$usuario->email}}</td>
		    <td>{{$usuario->email}}</td>
		    <td>{{$usuario->tipo}}</td>
		    <td>{{$usuario->pregunta}}</td>
		    <td>{{$usuario->respuesta}}</td>
		  </tr>
		</tbody>
	   @endforeach
	</table>
</div>

	<center>{!!$usuarios->render()!!}</center>

@else
	<div class="alert alert-danger">
		<p>Al parecer no tienes informes. Crea uno.</p>
	</div>
@endif
</div>
@endsection