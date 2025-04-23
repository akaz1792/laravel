<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;

class Personagem extends Controller
{
    function view() {
        return view('cadastrar-personagem');
    }

    function salvarPersonagem(Request $dados){
        //crie o código para salvar no BD
        $personagem = new Personagens();
        $personagem->create($dados->all());
    }

    function listarPersonagem() {
        $personagem = Personagens::all()->toArray();
        return view('listar-personagem', ['personagem'=> $personagem]);
    }
}
