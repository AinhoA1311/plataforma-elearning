@extends('layouts.app')

@section('title', 'Panel de Administración')

@section('content')
<div class="min-h-screen bg-black text-green-400 flex flex-col justify-center items-center p-6">
    <h1 class="text-4xl font-bold mb-4 border-b border-green-400 pb-2">Panel de Admin</h1>
    <p class="mb-8 text-lg">Todo listo, Ainhoa. Aquí empieza el control.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-xl">
        <a href="{{ route('admin.usuarios.index') }}" class="bg-green-900 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded shadow text-center">👥 Gestionar Usuarios</a>
        <a href="{{ route('admin.cursos.index') }}" class="bg-green-900 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded shadow text-center">📚 Gestionar Cursos</a>
        <a href="{{ route('admin.materiales.index') }}" class="bg-green-900 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded shadow text-center">📁 Materiales</a>
        <a href="{{ route('admin.estadisticas.index') }}" class="bg-green-900 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded shadow text-center">📊 Estadísticas</a>
    </div>

    <footer class="mt-16 text-sm text-green-500">
        <p><strong>Contacto:</strong> ainhoarosales13@gmail.com | Tel: 685195119</p>
        <div class="flex gap-4 justify-center mt-2">
            <a href="#" class="hover:underline">Aviso legal</a>
            <a href="#" class="hover:underline">Política de privacidad</a>
            <a href="#" class="hover:underline">Términos de uso</a>
        </div>
        <p class="mt-2">&copy; 2025 Plataforma E-learning. Todos los derechos reservados.</p>
    </footer>
</div>
@endsection



