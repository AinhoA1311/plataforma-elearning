@extends('layouts.app')

@section('title', 'Estadísticas del Alumno')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6 text-center">Tus Estadísticas</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
        <div class="bg-purple-100 p-6 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Cursos Activos</h2>
            <p class="text-3xl font-bold text-purple-800">3</p>
        </div>

        <div class="bg-blue-100 p-6 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Materiales Descargados</h2>
            <p class="text-3xl font-bold text-blue-800">12</p>
        </div>

        <div class="bg-green-100 p-6 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Progreso General</h2>
            <p class="text-3xl font-bold text-green-800">75%</p>
        </div>

        <div class="bg-yellow-100 p-6 rounded shadow">
            <h2 class="text-lg font-semibold mb-2">Foros Participados</h2>
            <p class="text-3xl font-bold text-yellow-800">2</p>
        </div>
    </div>
</div>
@endsection
