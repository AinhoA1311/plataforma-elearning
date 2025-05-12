<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CursoController;
use App\Models\User;

// Ruta principal (landing page o bienvenida)
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard general, protegida por autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Ruta para la zona de administración (inicio del panel admin)
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin');

// Ruta para la zona del alumno
Route::get('/alumno', function () {
    $usuarios = User::all(); // Opcionalmente puedes filtrar por rol si solo quieres alumnos
    return view('alumno.index', compact('usuarios'));
})->middleware(['auth'])->name('alumno');

// Rutas del CRUD de usuarios dentro del panel de administración
Route::middleware(['auth'])->group(function () {
    Route::resource('admin/usuarios', UserController::class)->names('admin.usuarios');
});

// Rutas del CRUD de cursos dentro del panel de administración
Route::middleware(['auth'])->group(function () {
    Route::resource('admin/cursos', CursoController::class)->names('admin.cursos');
});

// Rutas de autenticación (login, registro, etc.)
require __DIR__.'/auth.php';


