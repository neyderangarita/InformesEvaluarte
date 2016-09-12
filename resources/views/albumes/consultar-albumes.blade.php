@extends('app')

@section('content')

@if(Session::has('creado'))
	<div class="alert alert-success">
		<p>El informe ha sido creado</p>
	</div>
	  <div class="col-sm-12" style="text-align
@endif
<div class="container-fluid">
	<div class="row">: center">
		<img src="/imagenes/colegio.jpg"  width="40%" height="40%" />
	  </div>
	</div>
@if(Auth::user()->tipo === 'evaluarte')
<p><a href="/validado/albumes/crear-album" class="btn btn-primary" role="button">Crear informe</a></p>
@endif

@if(sizeof($albumes) > 0)	

<div class="table-responsive">
    <table class="table table-hover table-bordered table-striped">
    	<thead>
           <tr>
              <td>Nombre del informe</td>
              <td>Nombre de la prueba</td>
              <td>Acción</td>
          </tr>
        </thead>
		<tbody>
		@foreach($albumes as $index => $album)
	          <tr>
	              <td>{{$album->nombre}}</td>
	              <td>{{$album->descripcion}}</td>
	              <td><center><a href="/validado/fotos?id={{$album->id}}" class="btn btn-primary" role="button">Ver archivos</a></center></td>
	          </tr>
		@endforeach
    	</tbody>
	</table>
	<center>{!!$albumes->render()!!}</center>
</div>
@else
<div class="alert alert-danger">
	<p>Al parecer no tienes informes. Crea uno.</p>
</div>
@endif
</div>
@endsection
