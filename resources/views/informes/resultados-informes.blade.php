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
	<div class="col-md-6">
    <h4 class="box-title">Buscar:</h4>
	    <div class="input-group input-group-sm">
	        <input type="text" class="form-control" id="dato_buscado">
	        <span class="input-group-btn">
	            <button class="btn btn-primary btn-flat" type="button" onclick="buscarinforme();" >Buscar</button>
	        </span>
	    </div>
    </div>
</div>
</br>

<section class="content"  id="contenido_principal">
            
</section>
@endsection
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ asset('js/informes.js') }}"></script>