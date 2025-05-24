<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\EstadisticaController;
use App\Http\Controllers\Alumno\MisCursosController;
use App\Http\Controllers\Alumno\ForoController;

// RUTAS PÚBLICAS
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/catalogo', 'catalogo')->name('catalogo');
Route::view('/info', 'info')->name('info');
Route::view('/sobre', 'sobre')->name('sobre');

// RUTAS PROTEGIDAS PARA ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::resource('admin/usuarios', UserController::class)->names('admin.usuarios');
    Route::resource('admin/cursos', CursoController::class)->names('admin.cursos');
    Route::resource('admin/materiales', MaterialController::class)->names('admin.materiales');
    Route::get('admin/estadisticas', [EstadisticaController::class, 'index'])->name('admin.estadisticas.index');
});

// RUTAS PROTEGIDAS PARA ALUMNO
Route::middleware(['auth', 'role:alumno'])->group(function () {
    Route::get('/alumno', function () {
        $usuarios = User::all(); // puedes quitar esto si no los usas en la vista
        return view('alumno.index', compact('usuarios'));
    })->name('alumno');

    Route::get('/alumno/materiales', function () {
        return view('alumno.materiales.index');
    })->name('alumno.materiales');

    Route::get('/alumno/estadisticas', function () {
        return view('alumno.estadisticas.index');
    })->name('alumno.estadisticas');

    Route::get('/alumno/foro', [ForoController::class, 'index'])->name('alumno.foro');
    Route::post('/alumno/foro', [ForoController::class, 'publicar'])->name('alumno.foro.publicar');

    Route::get('/alumno/cursos', [MisCursosController::class, 'index'])->name('alumno.cursos');
});

// RUTA GENERAL PARA EL DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// AUTENTICACIÓN (Laravel Breeze, Jetstream, etc.)
require __DIR__.'/auth.php';












