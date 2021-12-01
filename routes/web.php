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
Route::get('cursos', [CursosController::class, 'index'])->name('cursos.index'); //Route::get('cursos', 'CursosController@index')
Route::get('cursos/create', [CursosController::class, 'create'])->name('cursos.create'); // Route::get('cursos/create', 'CursosController@create')
Route::get('cursos/{id}', [CursosController::class, 'show'])->name('cursos.show'); // Route::get('cursos/{curso}/{categoria?}', 'CursosController@show')
Route::get('cursos/{id}/edit', [CursosController::class, 'edit'])->name('cursos.edit');
Route::post('cursos', [CursosController::class, 'store'])->name('cursos.store');
Route::put('cursos/{id}', [CursosController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{id}', [CursosController::class, 'destroy'])->name('cursos.destroy');