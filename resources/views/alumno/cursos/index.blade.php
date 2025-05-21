@extends('layouts.app')

@section('title', 'Mis Cursos')

@section('content')
<div class="container">
    <h1 class="text-green text-3xl font-bold mb-6 text-center">📚 Mis Cursos</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="card p-6 bg-black border border-green-500 rounded shadow">
            <h2 class="text-xl font-bold text-green-300 mb-2">Curso: Desarrollo Web</h2>
            <p>Progreso: <strong>75%</strong></p>
            <p>Estado: <span class="text-yellow-400">En curso</span></p>
        </div>

        <div class="card p-6 bg-black border border-green-500 rounded shadow">
            <h2 class="text-xl font-bold text-green-300 mb-2">Curso: Bases de Datos</h2>
            <p>Progreso: <strong>100%</strong></p>
            <p>Estado: <span class="text-green-400">Finalizado</span></p>
        </div>

        <div class="card p-6 bg-black border border-green-500 rounded shadow">
            <h2 class="text-xl font-bold text-green-300 mb-2">Curso: Ciberseguridad</h2>
            <p>Progreso: <strong>40%</strong></p>
            <p>Estado: <span class="text-yellow-400">En curso</span></p>
        </div>
    </div>

    <div class="text-center mt-10">
        <a href="{{ route('alumno') }}" class="inline-block text-green-400 hover:underline">← Volver al panel del alumno</a>
    </div>
</div>
@endsection

