<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        return View('Conectado');
    }

    function desconectar(){
        return View('Desconectado');
    }
}
