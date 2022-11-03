<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetosController;
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

Route::get('/', function () {
    return view('MainPage');
});

Route::get('projetos',[ProjetosController::class,'get']);

Route::get('/paginaprojeto', function () {
    return view('paginaprojeto');
});
