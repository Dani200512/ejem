<?php

namespace App\http\Controllers;
use App\http\Controllers\Cursocontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/formulario',[CursoController::class,'create']);
Route::post('/formulario',[CursoController::class,'store'])->name('curso.store');
Route::get('/curso/{dato1}',[CursoController::class,'esPrimo']);



Route::get('/promedio',[PromedioController::class,'create1']);
Route::post('/promedio',[PromedioController::class,'store1'])->name('promedio.store');
Route::get('/promedio/{dato1}/{dato2}/{dato3}',[PromedioController::class,'promedio']);



Route::get('/amigos',[AmigosController::class,'create2']);
Route::post('/amigos',[AmigosController::class,'store2'])->name('amigos.store');
Route::get('/amigos/{dato1}/{dato2}',[AmigosController::class,'amigos']);




Route::get('/cuadratica',[CuadraticaController::class,'create3']);
Route::post('/cuadratica',[CuadraticaController::class,'cuadratica'])->name('cuadratica.store');

