<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projeto;
use App\Http\Controllers\PrincipalController;
use Exception;

class RelatoriosController extends Controller
{
    protected $paginaPrincipal;
    public function __construct(PrincipalController $paginaPrincipal)
    {
        $this->paginaPrincipal = $paginaPrincipal;
    }

    function get($id)
    {
        try {
            $projeto = Projeto::FindOrFail($id);
        } catch (Exception $e) {
            return $this->paginaPrincipal->get(1);
        }
        return View('relatorioprojeto')->with(["projeto" => $projeto]);
    }

}
