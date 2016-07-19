@extends('layouts.home')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nuevo Rol</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					@include('catalogos.roles.partes.mensajes')

					{!! Form::open(['route' => 'rol.store', 'method' => 'POST']) !!}
					@include('catalogos.roles.partes.campos')
					
					<button type="submit" class="btn btn-default">Crear</button>
					{!! Form::close() !!}
					</div>
			</div>
		</div>
	</div>
</div>
@stop