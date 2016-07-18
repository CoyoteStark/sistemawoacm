@extends('layouts.home')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<h1 class="page-header">Clientes</h1>
			</div>
			@if(Session::has('message'))
			<p class="alert alert-success">{{ Session::get('message')}}</p>
			@endif
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-3">
					<h3>Agregar nuevo cliente</h3>
					</div>
					<div class="col-lg-4">
						<a href="{{URL::route('clientes.create') }}" type="button"><i class="fa fa-plus-square-o fa-4x"></i></a>
						</div>
                    <div class="col-lg-5">
                    	{!! Form::open(array('method' => 'get', 'route' => 'clientes.index', 'class' => 'form'))  !!}
                    	<div class="input-group">
                    		{!! Form::text('palabra', null, array('class' => 'form-control', 'placeholder' => 'Escribe una palabra'))  !!}
                    		<span class="input-group-btn">
                    	    {!! Form::submit('buscar', array('class' => 'btn btn-default')) !!}
                    		</span>
                    	</div>
                    	{!! Form::close() !!}
                    </div>
				</div>
				<br>
				<p>Hay {{$lista->total()}} clientes</p>
				@include('catalogos.clientes.partes.tabla')
				</div>
			</div>
		</div>
	</div>
@include('comun.paginador')
@stop