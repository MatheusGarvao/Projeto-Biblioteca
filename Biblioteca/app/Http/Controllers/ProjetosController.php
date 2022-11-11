<?php

namespace App\Http\Controllers;

use App\Models\Projetos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class ProjetosController extends Controller
{
    //
    function get()
    {
        $projetos = Projetos::all()->sortBy('nomeprojeto')->where('projetoativo', 1);
        return View('MainPage')->with(["projetos" => $projetos]);
    }

    function show($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException) {
            $id = 0;
        }

        $projeto = Projetos::FindOrFail($id);
        if ($projeto->projetoativo == 1) {
            $projeto->quantidadevisitadas++;
            $projeto->save();
            return View('paginaprojeto')->with(["projeto" => $projeto]);
        } else {
            $this->get();
        }
    }
}
