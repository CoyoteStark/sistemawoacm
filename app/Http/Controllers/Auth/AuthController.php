<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
   

    use AuthenticatesAndRegistersUsers;

   
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }


 public function postLogin(Request $request){
    if (Auth::attempt([
                'email' => $request->email,
                'password' => $request->password
        ], $request->has('remember')
        )) {
        return redirect()->intended($this->redirectPath());
    }else{
        $rules = [
              'email' => 'required|email',
              'password' => 'required',
        ];
        $messages = [
           'email.required' => 'El campo email es requerido',
           'email.email' => 'El formato de email es incorrecto',
           'password.required' => 'El campo contraseña es requerido',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        return redirect('login')
               ->withErrors($validator)
               ->withInput()
               ->with('message', 'Error al iniciar sesion');
    }

 }
}
