<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CursoController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\EstadisticaController;
use App\Http\Controllers\Alumno\MisCursosController;

/*
|--------------------------------------------------------------------------
| Rutas Públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('/catalogo', 'catalogo')->name('catalogo');
Route::view('/info', 'info')->name('info');
Route::view('/sobre', 'sobre')->name('sobre');

/*
|--------------------------------------------------------------------------
| Rutas Protegidas (requieren login y rol)
|--------------------------------------------------------------------------
*/

// Rutas para ADMIN
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::resource('admin/usuarios', UserController::class)->names('admin.usuarios');
    Route::resource('admin/cursos', CursoController::class)->names('admin.cursos');
    Route::resource('admin/materiales', MaterialController::class)->names('admin.materiales');
    Route::get('admin/estadisticas', [EstadisticaController::class, 'index'])->name('admin.estadisticas.index');
});

// Rutas para ALUMNO
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

    Route::get('/alumno/foro', function () {
        return view('alumno.foro.index'); 
    })->name('alumno.foro');

    Route::get('/alumno/cursos', [MisCursosController::class, 'index'])->name('alumno.cursos');
});

/*
|--------------------------------------------------------------------------
| Ruta de Dashboard (opcional)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Rutas de Autenticación
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';










