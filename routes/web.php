<?php

use Illuminate\Support\Facades\Route;

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

/*
* Route::get        Consultar
* Route::post       Crear
* Route::put        Actualizar
* Route::delete     Eliminar
* Route::post       Guardar
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta para la vista de home
Route::get('/', function () {
    return view('home');
});

// Ruta para la vista de practicas
Route::get('practices', function () {
    return view('practices');
});

// Ruta para detalle de practica de practica
Route::get('practices/{id}', function ($id) {
    return view('practice', ['id' => $id]);
});


// Ruta para la vista de about

// Ruta para la vista de contact

