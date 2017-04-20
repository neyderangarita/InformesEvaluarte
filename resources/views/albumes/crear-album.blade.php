@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Crear Informes</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Al parecer algo está mal.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					<form class="form-horizontal" role="form" method="POST" action="/validado/albumes/crear-album">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Descripción</label>
<!-- 						<div class="col-md-6">
								<input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
							</div> -->

							<div class="col-md-6">
								<select name="descripcion" id="descripcion" class="form-control">
								    <option value="{{old('descripcion')}}">{{old('descripcion')}}</option>
								    <option value="tu saber">tu saber</option>
								    <option value="saber 4,6,7 y 8">saber 4,6,7 y 8</option>
								    <option value="saber 10 y 11 4 Preguntas Abiertas">saber 10 y 11 4 Preguntas Abiertas</option>
								    <option value="Mi saber aprueba">Mi saber aprueba</option>
								    <option value="perfil profesional">perfil profesional</option>
								    <option value="saber pro">saber pro</option>
								</select>
							</div>								
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Usuario</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="usuario_id" value="{{old('usuario_id')}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Crear informe
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
