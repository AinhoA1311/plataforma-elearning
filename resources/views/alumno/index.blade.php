@extends('layouts.app')

@section('title', 'Panel del Alumno')

@section('content')
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold">Bienvenido al panel del alumno</h2>
        <p class="text-gray-600 mt-2">Hola, {{ Auth::user()->name }}. Desde aquí puedes acceder a tus cursos y materiales.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
        <div class="bg-blue-100 p-6 rounded shadow">
            <h3 class="font-bold">Mis Cursos</h3>
            <p class="text-sm text-gray-600">Consulta tus cursos asignados. (En desarrollo)</p>
        </div>

        <a href="{{ route('alumno.materiales') }}" class="bg-yellow-100 p-6 rounded shadow hover:bg-yellow-200 transition">
            <h3 class="font-bold">Materiales</h3>
            <p class="text-sm text-gray-600">Accede a materiales del curso.</p>
        </a>

        <a href="{{ route('alumno.estadisticas') }}" class="bg-purple-100 p-6 rounded shadow hover:bg-purple-200 transition">
            <h3 class="font-bold">Estadísticas</h3>
            <p class="text-sm text-gray-600">Consulta tu progreso.</p>
        </a>

        <div class="bg-green-100 p-6 rounded shadow">
            <h3 class="font-bold">Foro / Comunidad</h3>
            <p class="text-sm text-gray-600">Participa con tus compañeros. (En desarrollo)</p>
        </div>
    </div>

    <div class="mt-8 text-center">
        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">← Volver al inicio</a>
    </div>
@endsection











