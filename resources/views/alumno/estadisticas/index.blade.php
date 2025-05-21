@extends('layouts.app')

@section('title', 'Estadísticas del Alumno')

@section('content')
<div class="container">
    <h1 class="text-green text-3xl font-bold mb-6 text-center">📊 Estadísticas Personales</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
        <div class="bg-black border border-green-500 p-6 rounded shadow">
            <h3 class="font-bold text-lg text-green-300 mb-2">Progreso General</h3>
            <p class="text-green-200">Cursos completados: <strong>1</strong></p>
            <p class="text-green-200">Progreso total: <strong>72%</strong></p>
            <p class="text-green-200">Horas dedicadas (estimadas): <strong>18h</strong></p>
        </div>

        <div class="bg-black border border-green-500 p-6 rounded shadow">
            <h3 class="font-bold text-lg text-green-300 mb-2">Materiales Completados</h3>
            <p class="text-green-200">Materiales leídos: <strong>8</strong></p>
            <p class="text-green-200">Videos visualizados: <strong>3</strong></p>
            <p class="text-green-200">Tests realizados: <strong>2</strong></p>
        </div>
    </div>

    <div class="text-center mt-10">
        <a href="{{ route('alumno') }}" class="text-green-400 hover:underline">← Volver al panel del alumno</a>
    </div>
</div>
@endsection

