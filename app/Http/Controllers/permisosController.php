<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Redirector;
use Illuminate\Http\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\FormularioPermisos;

use App\Permiso;
use App\Clave;

class permisosController extends Controller
{
   
    public function index(Request $request)
    {
        $lista = Permiso::paginate(10);
        if ($request->palabra != '') {
            $lista = Permiso::where('nombre', 'like', '%' . $request->palabra . '%')
                                ->orWhere('descripcion', 'like', '%' . $request->palabra . '%')
                                ->paginate(10);
        }
        return view('catalogos.permisos.index', compact('lista'));
    }

    
    public function create()
    {
        $claves = Clave::lists('nombre', 'id');

        return view('catalogos.permisos.create', compact('claves'));
    }

   
    public function store(FormularioPermisos $formulario)
    {
        $v = Validator::make($formulario->all(),
                             $formulario->rules(),
                             $formulario->messages());

        if ($v->fails()) {
            return redirect()->back()
                             ->withErrors($v->errors());
        }
        $permi = Permiso::create($formulario->all());
        return redirect()->route('permisos.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $permisos = Permiso::findOrfail($id);
        $claves = Clave::lists('nombre', 'id');

        return view('catalogos.permisos.edit', compact('permisos', 'claves'));
    }

    public function update(Request $request, $id)
    {
        $permisos = Permiso::findOrfail($id);
        $data = $request->all();
        $permisos->fill($data);
        $permisos->save();

        return redirect()->route('permisos.index');
    }

    
    public function destroy($id)
    {
        $permiso = Permiso::findOrfail($id);
        $permiso->delete();

       return redirect()->route('permisos.index');
    }
}
