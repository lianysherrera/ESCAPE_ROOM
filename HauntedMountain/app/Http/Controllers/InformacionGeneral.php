<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionGeneral extends Controller
{
    public function informacion()
    {
        // Aquí puedes colocar la lógica relacionada con la página de contacto
        return view('informacion.index'); // Por ejemplo, retornar la vista 'contacto.blade.php'
    }
}
