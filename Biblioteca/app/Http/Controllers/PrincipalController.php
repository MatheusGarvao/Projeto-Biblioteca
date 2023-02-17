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
        $this->incrementar(1);
        return View('MainPage')->with(["projetos" => $this->getProjetos()]);
    }

    function getRelatorio()
    {
        $this->incrementar(2);
        return View('Relatorio')->with(["projetos" => $this->getProjetos()]);
    }

    protected function getProjetos()
    {
        return Projeto::all()->sortBy('nomeprojeto')->where('projetoativo', 1);
    }

    protected function incrementar($pag)
    {
        $pagina = Principal::Find($pag);
        $pagina->quantidadevisitadas++;
        $pagina->save();
    }
}
