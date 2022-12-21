<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Http\Controllers\PrincipalController;
use Exception;

class ProjetosController extends Controller
{
    //
    protected $paginaPrincipal;
    public function __construct(PrincipalController $paginaPrincipal)
    {
        $this->paginaPrincipal = $paginaPrincipal;
    }

    function show($id)
    {
        try {
            $projeto = Projeto::FindOrFail($id);
        } catch (Exception $e) {
            return $this->paginaPrincipal->get(1);
        }
        if ($projeto->projetoativo == 1) {
            $projeto->quantidadevisitadas++;
            $projeto->save();
            return View('paginaprojeto')->with(["projeto" => $projeto]);
        } else {
            return $this->paginaPrincipal->get(1);
        }
    }

    function showPage($id){
        $projeto = Projeto::FindOrFail($id);
        $projeto->quantidadeclicklink++;
        $projeto->save();
        return redirect()->to($projeto->linkprojeto);
    }
}
