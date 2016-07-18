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
use App\Http\Requests\FormularioRedesSociales;
use App\RedSocial;

class SocialController extends Controller
{
    
    public function index(Request $request)
    {
        $lista = RedSocial::paginate(10);

        if ($request->palabra != '') {
            $lista = RedSocial::where('nombre', 'like', '%' . $request->palabra . '%')
                              ->orWhere('descripcion', 'like', '%' . $request->palabra . '%')
                              ->paginate(10);
        }
        return view('catalogos.RedesSociales.index', compact('lista'));
    }

    
    public function create()
    {
        return view('catalogos.RedesSociales.create');
    }

    
    public function store(FormularioRedesSociales $formulario)
    {
        $v = Validator::make($formulario->all(),
                             $formulario->rules(),
                             $formulario->messages());
        if ($v->fails()) {
            return redirect()->back()
                             ->withErrors($v->errors());
        }
        $rede = RedSocial::create($formulario->all());
        return redirect()->route('social.index');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $rd = RedSocial::findOrFail($id);

        return view('catalogos.RedesSociales.edit', compact('rd'));
    }

    
    public function update(Request $request, $id)
    {
        $rd = RedSocial::findOrFail($id);
        $data = $request->all();
        $rd->fill($data);
        $rd->save();

        return redirect()->route('social.index');
    }

    public function destroy($id)
    {
        $red = RedSocial::findOrFail($id);
        $red->delete();

        $message = $red->nombre . 'fue eliminado';
        if ($request->ajax()) {
            return $message;
        }
        return redirect()->route('social.index');
    }
}
