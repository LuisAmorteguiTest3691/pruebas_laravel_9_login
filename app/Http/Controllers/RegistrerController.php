<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrerController extends Controller
{
    // función para mostrar pagina de registro
    public function index() 
    {
        return view('auth.register');
    }

    // función para capturar datos del formulario
    public function store(Request $resquest)
    {
        // dd($resquest);

        // configur el campo, convierte en minusculas, espacios en - para dejar amigables con la web
        $resquest->request->add(['username' => Str::slug($resquest->username)]);

        // validacion
        $resquest->validate([
            'name' => 'required|min:5',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
