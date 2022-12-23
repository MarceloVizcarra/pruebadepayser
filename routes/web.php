<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
