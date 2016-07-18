@extends('layouts.home')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Nueva red social</h1>
			</div>
			<div class="panel-body">
				<div class="row">
					@include('catalogos.RedesSociales.partes.mensajes')
					{!! Form::open(['route' => 'social.store', 'method' => 'POST']) !!}
					@include('catalogos.RedesSociales.partes.campos')
					<button type="submit" class="btn btn-default">Crear</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@stop