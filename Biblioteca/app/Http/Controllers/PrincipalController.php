<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Principal;
use App\Models\Projeto;

class PrincipalController extends Controller
{

    function get($naoEncontrado = 0)
    {
        if ($naoEncontrado == 1) {
            return "Projeto não encontrado! (adicionar notificação / página não encontrado)";
        }

        $pagina = Principal::Find(1);
        $pagina->quantidadevisitadas++;
        $pagina->save();
        $projetos = Projeto::all()->sortBy('nomeprojeto')->where('projetoativo', 1);
        return View('MainPage')->with(["projetos" => $projetos]);
    }
}
