<?php

namespace App\Http\Controllers;

use App\Models\Curso;


class CursosController extends Controller
{
    //

    public static function mostrarCursos(){
     return Curso::all()->sortBy('nomecurso');
    }
    public static function mostrarCurso($id)
    {
        return Curso::find($id);
    }

    public static function quantidadeCursos(){
        return Curso::count();
    }
}
