<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetosController;
use App\Models\Projetos;

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


Route::get('/', [ProjetosController::class, 'get']);

Route::get('/paginaprojeto/{id}', [ProjetosController::class, 'show'])->name('projeto.pagina');
