<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Clave</th>
		<th>Tipo permiso</th>
		<th>Descripcion</th>
		<th>Acciones</th>
	</tr>
	@foreach ($lista as $permiso)
	<tr data-id="{{$permiso->id }}" data-name="{{$permiso->nombre }}">
		<td>{{$permiso->id}}</td>
		<td>{{$permiso->clave}}</td>
		<td>{{$permiso->nombre}}</td>
		<td>{{$permiso->descripcion}}</td>
		<td>
			@include('catalogos.permisos.partes.acciones')
		</td>
	</tr>
	@endforeach
</table>