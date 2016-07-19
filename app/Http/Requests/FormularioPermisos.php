<?php
namespace App\Http\Requests;
use App\Http\Requests\Request;

/**
* 
*/
class FormularioPermisos extends Request
{
	public function rules(){
		return[
           'idClave'      => 'required|numeric',
           'nombre'       => 'required|max:35|min:5|regex:/^[a-z]+$/i',
           'descripcion'  => 'required|max:200|min:5|regex:/^[a-z]+$/i',
		];
	}
	public function messages(){
		return[
          'idClave.required'     => 'la clave es requerida',
          'idClave.numeric'      => 'Solo se admiten numeros en la clave',
          'nombre.required'      => 'El nombre del permiso es requerido',
          'nombre.max'           => 'El nombre del permiso no puede ser mayor a 35 caracteres',
          'nombre.min'           => 'El nombre del permiso no puede ser menor a 5 caracteres',
          'nombre.regex'         => 'El nombre solo admite letras',
          'descripcion.required' => 'La descripcion es requerida',
          'descripcion.max'      => 'La descripcion no puede tener mas de 200 caracteres',
          'descripcion.min'      => 'La descripcion no puede tener menos de 5 caracteres',
		];
	}
	public function authorize(){
		return true;
	}
}