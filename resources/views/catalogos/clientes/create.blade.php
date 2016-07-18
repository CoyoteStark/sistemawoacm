@extends('layouts.home')
@section('content')

<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nuevo cliente</h1>
			</div>

			<div class="panel-body">
				<div class="row">
					@include('catalogos.clientes.partes.mensajes')

					{!! Form::open(['route' => 'clientes.store', 'method' => 'POST']) !!}
					@include('catalogos.clientes.partes.campos')
					<button type="submit" class="btn btn-primary">Crear</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop
