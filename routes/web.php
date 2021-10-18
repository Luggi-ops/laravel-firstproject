<?php

use App\Http\Controllers\CursosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class); // Route::get('/', 'HomeController')
Route::get('cursos', [CursosController::class, 'index']); //Route::get('cursos', 'CursosController@index')
Route::get('cursos/create', [CursosController::class, 'create']); // Route::get('cursos/create', 'CursosController@create')
Route::get('cursos/{curso}/{categoria?}', [CursosController::class, 'show']); // Route::get('cursos/{curso}/{categoria?}', 'CursosController@show')