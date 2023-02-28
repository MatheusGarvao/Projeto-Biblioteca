<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\RelatoriosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/relatorio',[PrincipalController::class,'getRelatorio'])->name('relatorio');

Route::get('/', [PrincipalController::class, 'get'])->name('inicial');

Route::get('/{id}', [ProjetosController::class, 'show'])->name('projeto.pagina');

Route::get('/relatorio/projeto/{id}',[RelatoriosController::class, 'get'])->name('relatorio.projeto');

Route::get('/projeto/{id}',[ProjetosController::class, 'showPage'])->name('projeto.link');


Route::post('/projeto/{id}/like', [ProjetosController::class, 'like'])->name('projeto.like');

Route::get('/{any}', function () {
    return redirect()->route('inicial');
})->where('any', '.*');
