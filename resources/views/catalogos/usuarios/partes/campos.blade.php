<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su nombre']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Correo electronico') !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor introduzca su email']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Por favor escriba su contraseña']) !!}
</div>