@extends('layouts.home')
@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col lg 12">
				<h1 class="page-header">Editar permiso</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					@include('catalogos.permisos.partes.mensajes')
					{!! Form::model($permisos, ['route' => ['permisos.update', $permisos->id], 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('idClave', 'clave') !!}
						{!! Form::select('idClave', $claves, $permisos->clave->id, ['class' => 'form-control']) !!}
					</div>
					@include('catalogos.permisos.partes.campos')
					<button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop