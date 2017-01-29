@extends('app')

@section('content')

@if (Session::has('error'))
	<div class="alert alert-danger">
		<strong>Whoops!</strong> Al parecer algo está mal.<br><br>
		{{Session::get('error')}}
	</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Inicio</div>

				<div class="panel-body">
				<center>
					<p><b><h3>Por favor inicie sesión para usar el sistema</h3></b></p>
					<img class="custom_logo ie_png img-responsive" width="70%" height="70%" alt="inicie sesion" src="/imagenes/por favor inicie sesión.jpg">
				</center>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
