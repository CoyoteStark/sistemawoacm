<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

/**
* 
*/
class FormularioClientes extends Request
{
	public function rules(){
		return[
           'nombre'             => 'required|max:60|min:4|regex:/^[a-z]+$/i',
           'apellidoPaterno'    => 'required|max:60|min:4|regex:/^[a-z]+$/i',
           'apellidoMaterno'    => 'required|max:60|min:4|regex:/^[a-z]+$/i',
           'direccion'          => 'required|max:200|min:8',
           'ciudad'             => 'required|max:90|min:4|regex:/^[a-z]+$/i',
           'cp'                 => 'required',
           'telefono'           => 'required',
           'celular'            => 'required',
		];
	}
	public function messages(){
		return[
          'nombre.required'           => 'El campo nombre es requerido',
          'nombre.max'                => 'El maximo permitido en un nombre es de 60 letras',
          'nombre.min'                => 'El minimo permitido en un nombre es de 4 letras',
          'nombre.regex'              => 'Solo se admiten letras en el nombre',
          'apellidoPaterno.required'  => 'El campo apellido paterno es requerido',
          'apellidoPaterno.max'       => 'El maximo permitido en el apellido paterno es de 60 letras',
          'apellidoPaterno.min'       => 'El minimo permitido en el apellido paterno es de 4 letras',
          'apellidoPaterno.regex'     => 'Solo se admiten letras en el apellido paterno',
          'apellidoMaterno.required'  => 'El campo apellido materno es requerido',
          'apellidoMaterno.max'       => 'El maximo permitido en el apellido materno es de 60 letras',
          'apellidoMaterno.min'       => 'El minimo permitido en el apellido materno es de 4 letras',
          'apellidoMaterno.regex'     => 'Solo se admiten letras en el apellido materno',
          'direccion.required'        => 'El campo direccion es requerido',
          'direccion.max'             => 'El maximo permitido en la direccion es de 200 caracteres',
          'direccion.min'             => 'El minimo permitido en la direccion es de 8 caracteres',
          'ciudad.required'           => 'El campo ciudad es requerido',
          'ciudad.max'                => 'El maximo permitido en el campo ciudad es de 90 letras',
          'ciudad.min'                => 'El minimo permitido en el campo ciudad es de 4 letras',
          'ciudad.regex'              => 'Solo se admiten letras en el campo ciudad',
          'cp.required'               => 'El codigo postal es requerido',
          'telefono.required'         => 'El telefono es requerido',
          'celular.required'          => 'El celular es requerido',
		];
	}
	public function authorize(){
		return true;
	}
}