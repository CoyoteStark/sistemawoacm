<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

class FormularioUsuarios extends Request{
	
	public function rules(){
		return [
           'name'     => 'required|max:60|min:4',
           'email'    => 'required|email|max:255|unique:users',
           'password' => 'required|min:6',
           'idRoles'  => 'required',
		];
	}

	public function messages(){
		return [
           'name.required'      => 'El campo nombre es requerido',
           'name.max'           => 'El maximo permitido en un nombre es de 60 letras',
           'name.min'           => 'El minimo permitido en un nombre es de 4 letras',
           'email.required'     => 'El campo email es requerido',
           'email.email'        => 'El formato de email es incorrecto',
           'email.max'          => 'El maximo permitido es de 255 caracteres',
           'email.unique'       => 'El email ya se encuentra registrado en la base de datos',
           'password.required'  => 'El campo contraseña es requerido',
           'password.min'       => 'El minimo permitido es de 6 caracteres',
           'idRoles'            => 'El rol es requerido',
		];
	}

	
	public function authorize(){
		return true;
	}
}