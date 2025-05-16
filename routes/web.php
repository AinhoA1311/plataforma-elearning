<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\EstadisticaController;

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Rutas protegidas con autenticación + middleware de roles
|--------------------------------------------------------------------------
*/

// Zona ADMIN (solo usuarios con rol admin)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::resource('admin/usuarios', UserController::class)->names('admin.usuarios');
    Route::resource('admin/cursos', CursoController::class)->names('admin.cursos');
    Route::resource('admin/materiales', MaterialController::class)->names('admin.materiales');
    Route::get('admin/estadisticas', [EstadisticaController::class, 'index'])->name('admin.estadisticas.index');
});

// Zona ALUMNO (solo usuarios con rol alumno)
Route::middleware(['auth', 'role:alumno'])->group(function () {
    Route::get('/alumno', function () {
        $usuarios = User::all(); // Puedes filtrar por rol si quieres
        return view('alumno.index', compact('usuarios'));
    })->name('alumno');

    Route::get('/alumno/materiales', function () {
        return view('alumno.materiales.index');
    })->name('alumno.materiales');

    Route::get('/alumno/estadisticas', function () {
        return view('alumno.estadisticas.index');
    })->name('alumno.estadisticas');
});

/*
|--------------------------------------------------------------------------
| Ruta dashboard (opcional)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Rutas de autenticación
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';








