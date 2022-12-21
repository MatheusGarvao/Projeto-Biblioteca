<?php

namespace App\Http\Controllers;

use App\Models\Curso;


class CursosController extends Controller
{
    //
    public static function mostrarCurso($id)
    {
        $curso = Curso::find($id);
        return $curso;
    }

    public static function quantidadeCursos(){
        $cursos = Curso::count();
        return $cursos;
    }
}
