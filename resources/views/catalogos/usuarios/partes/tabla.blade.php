<div class="table-responsive">
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Rol</th>
				<th>Acciones</th>
			</tr>
		</thead>
		 @foreach ($lista as $user)
		 <tr data-id="{{ $user->id }}" data-name="{{ $user->name }}" class="table-danger">
		 	<td>{{$user->id}}</td>
		 	<td>{{$user->name}}</td>
		 	<td>{{$user->email}}</td>
		 	<td>{{$user->roles->nombre}}</td>
		 	<td>
		 		@include('catalogos.usuarios.partes.acciones')
		 	</td>
		 </tr>
		 @endforeach
	</table>
</div>