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
<center>{{ $usuarios->links() }}</center>