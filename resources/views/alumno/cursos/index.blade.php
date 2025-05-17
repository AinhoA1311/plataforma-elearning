@extends('layouts.app')

@section('title', 'Mis Cursos')

@section('content')
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold">Mis Cursos</h2>
        <p class="text-gray-600 mt-2">Aquí verás los cursos en los que estás matriculado. (En desarrollo)</p>
    </div>

    <div class="text-center">
        <p class="text-gray-500">Próximamente se mostrarán tus cursos.</p>
        <a href="{{ route('alumno') }}" class="mt-4 inline-block text-blue-500 hover:underline">← Volver al panel del alumno</a>
    </div>
@endsection
