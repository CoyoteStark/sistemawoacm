@extends('layouts.home')
@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Editar clientes</h1>
			</div>

			<div class="panel-body">
				<div class="row">
					@include('catalogos.clientes.partes.mensajes')
					{!! Form::model($persona, ['route' => ['clientes.update', $persona->id], 'method' => 'PUT'])  !!}
					@include('catalogos.clientes.partes.campos')
					<button type="submit" class="btn btn-default">Actualizar</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop