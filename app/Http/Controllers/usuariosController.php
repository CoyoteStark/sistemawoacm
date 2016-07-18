<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\FormularioUsuarios;
use App\User;
use App\Roles;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class usuariosController extends Controller
{
 
    public function index(Request $request)
    {
     $lista = User::paginate(10);
     $roles = Roles::lists('nombre');
      if ($request->palabra != '') {
            $lista = User::where('name', 'like', '%' . $request->palabra . '%')
        ->orWhere('email', 'like', '%' . $request->palabra . '%')
        ->paginate(10);
      }
      return view('catalogos.usuarios.index', compact('roles', 'lista'));
    }

    public function create()
    {
        $rol = Roles::lists('nombre', 'id');
        //return view('catalogos.usuarios.create')->with('rol', $rol);
        return \View::make('catalogos.usuarios.create', compact('rol'));
    }

    
    public function store(FormularioUsuarios $formulario)
    {
        $v = Validator::make($formulario->all(),
                             $formulario->rules(),
                             $formulario->messages());

        if ($v->fails()) {
            return redirect()->back()
                             ->withErrors($v->errors())
                             ->withInput($request->except('password'));
        }
        $user = User::create($formulario->all());

        return redirect()->route('users.index');
    }

   
    public function show($id)
    {
        //POST
    }

    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $rol = Roles::lists('nombre', 'id');
        return view('catalogos.usuarios.edit', compact('user', 'rol'));
    }


    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->fill($data);
        $user->save();

        return redirect()->route('users.index');
    }

  
    public function destroy($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->delete();

        $message = $user->name . ' fue eliminado';
        if($request->ajax()){
            return $message;
        }
        return redirect()->route('users.index');
    }
}
