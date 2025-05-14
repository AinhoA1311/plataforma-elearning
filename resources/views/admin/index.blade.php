@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
    <div class="text-center mb-10">
        <h2 class="text-2xl font-bold">Panel de Administración</h2>
        <p class="text-gray-600">Bienvenido, Admin. Desde aquí puedes gestionar el sistema.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('admin.usuarios.index') }}" class="bg-blue-100 p-6 rounded shadow text-center hover:bg-blue-200 transition">
            Usuarios
        </a>

        <a href="{{ route('admin.cursos.index') }}" class="bg-green-100 p-6 rounded shadow text-center hover:bg-green-200 transition">
            Cursos
        </a>

       <a href="{{ route('admin.materiales.index') }}" class="block p-6 rounded-lg shadow bg-yellow-100 text-center hover:bg-yellow-200 transition">
            Materiales
       </a>



        <a href="#" class="bg-purple-100 p-6 rounded shadow text-center cursor-not-allowed">
            Estadísticas (en desarrollo)
        </a>
    </div>
@endsection