<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetosController;
use App\Http\Controllers\PrincipalController;


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


Route::get('/', [PrincipalController::class, 'get'])->name('inicial');

Route::get('/{id}', [ProjetosController::class, 'show'])->name('projeto.pagina');

Route::get('/projeto/{id}',[ProjetosController::class, 'showPage'])->name('projeto.link');
