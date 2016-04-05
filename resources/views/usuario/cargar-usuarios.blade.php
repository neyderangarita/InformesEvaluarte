@extends('app')

@section('content')

@if(Session::has('creada'))
	<div class="alert alert-success">
		<p>El archivo ha sido subido</p>
	</div>
@endif

<div class="container-fluid">
	<form class="form-horizontal" role="form" method="POST" action="/validado/usuario/cargar-usuarios" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
		<div class="form-group required">
			<label class="col-md-4 control-label">Archivo max: 20MB</label>
			<div class="col-md-6">
				<input type="file" class="form-control" name="imagen" required>
			</div>
		</div>
			<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="btn btn-primary">
					Subir Archivo
				</button>
			</div>
		</div>
	</form>
</div>
@endsection