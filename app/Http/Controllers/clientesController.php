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
use App\Http\Requests\FormularioClientes;

use App\Cliente;
use App\Persona;
class clientesController extends Controller
{
    
    public function index(Request $request)
    {
        $lista = Cliente::paginate(10);

        if ($request->palabra != '') {
            $personas = Persona::where('nombre', 'like', '%' . $request->palabra . '%')
                             ->orWhere('apellidoPaterno', 'like', '%' . $request->palabra . '%')
                             ->orWhere('apellidoMaterno', 'like', '%' . $request->palabra . '%')
                             ->orWhere('direccion', 'like', '%' . $request->palabra . '%')
                             ->orWhere('ciudad', 'like', '%' . $request->palabra . '%')
                             ->orWhere('cp', 'like', '%' . $request->palabra . '%')
                             ->orWhere('telefono', $request->palabra)
                             ->orWhere('celular', $request->palabra)->select('id')->get()->toArray();

                             $lista = Cliente::whereIn('idPersona', $personas)->paginate(10);
        }
        return view('catalogos.clientes.index', compact('lista'));
    }

  
    public function create()
    {
        return view('catalogos.clientes.create');
    }

   
    public function store(FormularioClientes $formulario)
    {
       $v = Validator::make($formulario->all(),
                            $formulario->rules(),
                            $formulario->messages());
       if ($v->fails()) {
           return redirect()->back()
                            ->withErrors($v->errors())
                            ->withInput($request->except('password'));
       }
       $persona = new Persona();
       $persona->fill($formulario->all());
       $persona->save();

       $cliente = new Cliente();
       $cliente->idPersona = $persona->id;
       $cliente->save();

       return redirect()->route('clientes.index');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $clientes = Cliente::findOrFail($id);
        $idPersona = $clientes->idPersona;
        $persona = Persona::findOrFail($idPersona);

        return view('catalogos.clientes.edit', compact('persona'));
    }

   
    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $data = $request->all();
        $persona->fill($data);
        $persona->save();

        return redirect()->route('clientes.index');
    }

    
    public function destroy($id, Request $request)
    {
        $cliente = Cliente::findOrFail($id);
        $idPersona = $cliente->idPersona;
       
       Cliente::destroy($id);
       Persona::destroy($idPersona);

       return redirect()->route('clientes.index');
    }
}
