<?php

namespace App\Http\Requests;
use App\Http\Requests\Request;


class FormularioRedesSociales extends Request{

	public function rules(){
		return[
         'nombre'       => 'required|max:20|min:4|regex:/^[a-z]+$/i',
         'descripcion'  => 'required|max:250|min:20',
         'URL'          => 'required|max:100|min:15',
		];
	}
	public function messages(){
		return[
         'nombre.required'          => 'El campo nombre es requerido',
         'nombre.max'               => 'El maximo permitido es de 20 letras',
         'nombre.min'               => 'El minimo permitido es de 4 letras',
         'nombre.regex'             => 'Solo se admiten letras',
         'descripcion.required'     => 'El campo descripcion es requerido',
         'descripcion.max'          => 'El maximo permitido es de 250 letras',
         'descripcion.min'          => 'El minimo permitido es de 20 letras',
         'URL.required'             => 'El campo url es requerido',
         'URL.max'                  => 'El maximo permitido es de 100 caracteres',
         'URL.min'                  => 'El minimo permitido es de 15 caracteres',
		];
	}
	public function authorize(){
		return true;
	}
}