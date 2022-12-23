<?php

use App\Http\Controllers\PageController;
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

Route::controller(PageController::class) -> group(function () {
    // Ruta pra la vista de home
    Route::get('/', 'home') -> name('home');

    // ruta para la vista de anuncions
    Route::get('advert', 'advert') -> name('advert');

    // ruta para la vista de detalle de trabajo
    Route::get('advert/{employe:slug}', 'employe') -> name('employe');

    // Ruta para la vista de acerca de nosotros
    Route::get('about', 'about') -> name('about');

    // Ruta para la vista de nuestro contacto
    Route::get('contact', 'contact') -> name('contact');
});

// // Ruta para la vista de home
// Route::get('/', function () {
//     return view('home');
// }) -> name('home');

// // Ruta para la vista de practicas
// Route::get('practices', function () {
//     return view('practices');
// }) -> name('practices');

// // Ruta para detalle de practica de practica
// Route::get('practices/{id}', function ($id) {
//     $practice = $id;
//     return view('practice', ['practice' => $practice]);
// }) -> name('practice');


// Ruta para la vista de about

// Ruta para la vista de contact

