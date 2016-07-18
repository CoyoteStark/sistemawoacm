<table class="table table-striped">
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Descripcion</th>
		<th>URL</th>
		<th>Acciones</th>
	</tr>
	@foreach ($lista as $red)
	<tr data-id="{{ $red->id }}" data-name="{{ $red->nombre }}">
	   <td>{{ $red->id}}</td>
	   <td>{{ $red->nombre}}</td>
	   <td>{{ $red->descripcion}}</td>
	   <td>{{ $red->URL}}</td>
	   <td>
	   	@include('catalogos.RedesSociales.partes.acciones')
	   </td>
	</tr>
	@endforeach
</table>