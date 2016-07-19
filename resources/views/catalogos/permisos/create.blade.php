@extends('layouts.home')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nuevo permiso</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					@include('catalogos.permisos.partes.mensajes')

					{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
					<div class="class-group">
						{!! Form::label('idClave', 'Clave') !!}
						{!! Form::select('idClave', $claves, null, ['class' => 'form-control']) !!}
					</div>
					@include('catalogos.permisos.partes.campos')
					<button type="submit" class="btn btn-primary">Crear</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop