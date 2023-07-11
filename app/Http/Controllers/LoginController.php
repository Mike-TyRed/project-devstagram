<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        //Regresa la vista de autentificacion
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // dd($request->remember);

        //Valida que los datos coincidan con lo requerido
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Comprueba que las credenciales que ingreso son correctas
        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('message', 'Datos incorrectos');
        }

        //Redireccionar
        return redirect()->route('posts.index', auth()->user()->username);
    }
}
