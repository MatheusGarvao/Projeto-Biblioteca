<?php

namespace App\Http\Controllers;

use App\Models\Cursos;


class CursosController extends Controller
{
    //
    public static function mostrarCurso($id)
    {
        $cursos = Cursos::find($id);
        return $cursos;
    }

    public static function quantidadeCursos(){
        $cursos = Cursos::count();
        return $cursos;
    }
}
