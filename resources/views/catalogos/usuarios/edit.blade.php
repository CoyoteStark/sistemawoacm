@extends('layouts.home')
@section('content')

<div id="page-wrapper">

	<div class="container-fluid">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar usuario</h1>
			</div>

			<div class="panel-body">
			   <div class="row">

				@include('catalogos.usuarios.partes.mensajes')

				{!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
				@include('catalogos.usuarios.partes.campos')
				<div class="form-group">
					{!! Form::label('idRoles', 'Rol de usuario') !!}
					{!! Form::select('idRoles', $rol, $user->roles->id, ['class' => 'form-control']) !!}
				</div>
				<br>
				<button type="submit" class="btn btn-default">Actualizar</button>
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop