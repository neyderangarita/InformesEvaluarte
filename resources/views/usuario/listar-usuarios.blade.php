@extends('app')

@section('content')

<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
		<center><h2>Listado de usuarios</h2></center>
	</div>	
</div>
</br>
<div class="row">
	<div class="col-md-6">
    <h4 class="box-title">Buscar:</h4>
	    <div class="input-group input-group-sm">
	        <input type="text" class="form-control" id="dato_buscado">
	        <span class="input-group-btn">
	            <button class="btn btn-primary btn-flat" type="button" onclick="buscarusuario();" >Buscar</button>
	        </span>
	    </div>
    </div>
</div>
</br>

<section class="content"  id="contenido_principal">
            
</section>

</div>
@endsection
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{ asset('js/usuarios.js') }}"></script>