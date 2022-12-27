<?php

use App\Http\Controllers\ApplyController;   // Agregamos el controlador de Apply
use App\Http\Controllers\EmployeController; // Agregamos el controlador de Employe
use App\Http\Controllers\PageController;    // Agregamos el controlador de Page (parte publica)
use App\Http\Controllers\ProfileController; // Agregamos el controlador de Profile (parte privada)

use Illuminate\Support\Facades\Route;

// ========= Rutas para el manejo de la parte publica de la pagina web
Route::controller(PageController::class) -> group(function () {
    Route::get('/', 'home') -> name('home');                            // Ruta pra la vista de home
    Route::get('advert', 'advert') -> name('advert');                   // ruta para la vista de anuncions
    Route::get('advert/{employe:slug}', 'employe') -> name('employe');  // ruta para la vista de detalle de trabajo
    Route::get('about', 'about') -> name('about');                      // Ruta para la vista de acerca de nosotros
    Route::get('contact', 'contact') -> name('contact');                // Ruta para la vista de nuestro contacto
});

// ========= Rutas para el manejo de la parte privada de la pagina web

// Rutas de autenticacion
require __DIR__.'/auth.php';

// Ruta para la vista de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para el manejo de los empleos
Route::resource('employes', EmployeController::class) -> middleware('auth') -> except(['show']) ;

// Rutas para el manejo de las aplicaciones (postulaciones)
Route::resource('applies', ApplyController::class) -> middleware('auth') -> except(['index', 'edit', 'update']) ;

//Route::get('/dashboard', [Controller::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');