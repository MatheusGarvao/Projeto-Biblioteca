<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
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

    function showPage($id)
    {
        $projeto = Projeto::FindOrFail($id);
        $projeto->quantidadeclicklink++;
        $projeto->save();
        return redirect()->to($projeto->linkprojeto);
    }



    public function like(Request $request, $id)
    {
        if ($request->method() !== 'POST') {
            return redirect()->route('inicial'); // or any other URL you want to redirect to
        }
        $projeto = Projeto::findOrFail($id);

        if ($request->session()->get('projeto_like_' . $id) == null) {
            $projeto->quantidadelikes++;
            $projeto->save();

            $request->session()->put('projeto_like_' . $id, true);

            return redirect()->back()->with('like', 1)->withInput();
        }
        return redirect()->back()->with("like", 0)->withInput();
    }
};
