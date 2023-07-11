<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function store()
    {
        //Utilizar un metodo de auth para cerrar la sesion

        auth()->logout();

        return redirect()->route('login');
    }
}
