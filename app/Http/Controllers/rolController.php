<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\FormularioRol;

use App\Roles;
use App\PermisoRol;
class rolController extends Controller
{
    
    public function index(Request $request)
    {
        $lista = Roles::paginate(10);

        if ($request->palabra != '') {
            $lista = Roles::where('nombre', 'like', '%' . $request->palabra . '%')->paginate(10);
        }
        return view('catalogos.roles.index', compact('lista'));
    }

   
    public function create()
    {
        return view('catalogos.roles.create');
    }

   
    public function store(FormularioRol $formulario)
    {
        $v = Validator::make($formulario->all(),
                             $formulario->rules(),
                             $formulario->messages());
        if ($v->fails()) {
            return redirect()->back()
                             ->withErrors($v->errors());
        }
        $rol = Roles::create($formulario->all());
        return redirect()->route('rol.index');  
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $rol = Roles::findOrFail($id);
        return view('catalogos.roles.edit', compact('rol'));
    }

    public function update(Request $request, $id)
    {
        $rol = Roles::findOrfail($id);
        $data = $request->all();
        $rol->fill($data);
        $rol->save();

        return redirect()->route('rol.index');
    }

    public function destroy($id, Request $request)
    {
        $role = Roles::findOrfail($id);
        $role->delete();

        return redirect()->route('rol.index');
    }
}
