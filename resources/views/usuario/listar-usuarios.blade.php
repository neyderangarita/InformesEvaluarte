@extends('app')

@section('content')

<div class="container-fluid">
@if(sizeof($usuarios) > 0)
<div class="row">
	<div class="col-md-12">
		<center><h2>Listado de usuarios</h2></center>
	</div>	
</div>
</br>

<div class="row">
	<div class="col-md-12">
    <h4 class="box-title">Buscar usuarios</h4>
	    <div class="input-group input-group-sm">
	        <input type="text" class="form-control" id="dato_buscado">
	        <span class="input-group-btn">
	            <button class="btn btn-primary btn-flat" type="button" onclick="buscarusuario();" >Buscar</button>
	        </span>
	    </div>
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

<script src="{{ asset('js/sistemalaravel.js') }}"></script>