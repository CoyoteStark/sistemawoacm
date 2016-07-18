<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Direccion</th>
		<th>Ciudad</th>
		<th>Codigo postal</th>
		<th>Telefono</th>
		<th>Celular</th>
		<th>Acciones</th>
	</tr>
	@foreach ($lista as $cliente)
	<tr>
		<td>{{$cliente->id}}</td>
		<td>{{$cliente->personas->nombre}}</td>
		<td>{{$cliente->personas->apellidoPaterno}}</td>
		<td>{{$cliente->personas->apellidoMaterno}}</td>
		<td>{{$cliente->personas->direccion}}</td>
		<td>{{$cliente->personas->ciudad}}</td>
		<td>{{$cliente->personas->cp}}</td>
		<td>{{$cliente->personas->telefono}}</td>
		<td>{{$cliente->personas->celular}}</td>
		<td>
			@include('catalogos.clientes.partes.acciones')
		</td>
	</tr>
	@endforeach
</table>