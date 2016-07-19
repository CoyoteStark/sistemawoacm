<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;

/**
* 
*/
class FormularioRol extends Request
{
	function rules(){
		return[
            'nombre' => 'required|max:35|min:5|regex:/^[a-z]+$/i',
		];
	}
	function messages(){
		return[
       'nombre.required' => 'El nombre del nuevo rol es requerido',
       'nombre.max'      => 'El maximo de letras que puede llevar el nombre del rol es de 35',
       'nombre.min'      => 'El minimo de letras que puede llevar el nombre del rol es de 5',
       'nombre.regex'    => 'Solo se admiten letras en el nombre del rol',
		];
	}
	public function authorize(){
		return true;
	}
}