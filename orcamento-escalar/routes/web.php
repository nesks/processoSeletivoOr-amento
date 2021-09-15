<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\OrcamentoController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PlanoController;



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
    return view('welcome');
});



Route::resource('orcamento', OrcamentoController::class);
Route::resource('tv', TvController::class);
Route::resource('player', PlayerController::class);
Route::resource('plano', PlanoController::class);
