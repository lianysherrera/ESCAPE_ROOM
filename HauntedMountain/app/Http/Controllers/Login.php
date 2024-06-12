<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login()
    {
        // Aquí puedes colocar la lógica relacionada con la página de contacto
        return view('login.index'); // Por ejemplo, retornar la vista 'contacto.blade.php'
    }
}
