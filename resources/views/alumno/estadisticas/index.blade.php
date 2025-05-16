@extends('layouts.app')

@section('title', 'Estadísticas del Alumno')

@section('content')
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold">Estadísticas Personales</h2>
        <p class="text-gray-600 mt-2">Aquí podrás ver el seguimiento de tu progreso como alumno.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-center">
        <div class="bg-blue-100 p-6 rounded shadow">
            <h3 class="font-bold text-lg">Progreso General</h3>
            <p class="text-gray-700">Este apartado estará disponible próximamente.</p>
        </div>

        <div class="bg-green-100 p-6 rounded shadow">
            <h3 class="font-bold text-lg">Materiales Completados</h3>
            <p class="text-gray-700">Visualiza los materiales que has completado. (En desarrollo)</p>
        </div>
    </div>

    <div class="mt-8 text-center">
        <a href="{{ route('alumno') }}" class="text-blue-500 hover:underline">← Volver al panel</a>
    </div>
@endsection
