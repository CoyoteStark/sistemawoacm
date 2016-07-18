@extends('layouts.home')
@section('content')

<div id="page-wrapper">

 <div class="container-fluid">

 	<div class="row">
 		<div class="col-lg-12">
 			<h1 class="page-header">Nuevo Usuario</h1>
 		</div>
 		    
 		    <div class="panel-body">
 		    	<div class="row">
 		    
 		    	@include('catalogos.usuarios.partes.mensajes')

				{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
				@include('catalogos.usuarios.partes.campos')
				<div class="class-group">
					{!! Form::label('idRoles', 'Rol') !!}
					{!! Form::select('idRoles', $rol, null, ['class' => 'form-control']) !!}
				</div>
				<br>
				<button type="submit" class="btn btn-default">Crear</button>
				{!! Form::close() !!}
 	   </div>
 	</div>
 </div>
</div>
</div>
@stop
