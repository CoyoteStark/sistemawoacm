<table class="table table-striped">
      <tr>
      	<th>#</th>
      	<th>Nombre</th>
      	<th>Acciones</th>
      </tr>
      @foreach ($lista as $rol)
      <tr data-id="{{ $rol->id }}" data-name="{{ $rol->nombre }}">
      	<td>{{$rol->id}}</td>
      	<td>{{$rol->nombre}}</td>
      	<td>
      		@include('catalogos.roles.partes.acciones')
      	</td>
      </tr>
	@endforeach
</table>