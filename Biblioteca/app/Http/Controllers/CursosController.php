<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public static function mostrarCurso($id)
    {
        $cursos = Cursos::find($id);

        return $cursos;
    }
}
