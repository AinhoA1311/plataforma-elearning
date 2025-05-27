@extends('layouts.app')

@section('title', 'Materiales del Curso')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-green text-3xl font-bold mb-10 text-center">📁 Materiales del Curso</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Guía de Laravel -->
        <div class="card text-center">
            <p class="font-bold text-purple-200 text-lg">📄 Guía de Laravel</p>
            <a href="{{ asset('materiales/guia-laravel.pdf') }}" target="_blank" class="underline hover:text-green-300 block mt-2">
                Guía de Laravel para principiantes (PDF)
            </a>
            <p class="text-sm text-green-400 mt-2">Última actualización: mayo 2025</p>
        </div>

        <!-- Vídeo de Git -->
        <div class="card text-center">
            <p class="font-bold text-purple-200 text-lg">🎞️ Video de Git</p>
            <a href="https://www.youtube.com/watch?v=HiXLkL42tMU" target="_blank" class="underline hover:text-green-300 block mt-2">
                Aprende Git y GitHub desde cero
            </a>
            <p class="text-sm text-green-400 mt-2">Duración: 24 minutos</p>
        </div>

        <!-- SQL Básico -->
        <div class="card text-center">
            <p class="font-bold text-purple-200 text-lg">📦 SQL Básico</p>
            <button onclick="forzarDescargaZip()" class="underline hover:text-green-300 block mt-2 text-green-300">
                Descargar ejercicios SQL (ZIP)
            </button>
            <p class="text-sm text-green-400 mt-2">Archivo en formato ZIP</p>
        </div>

        <!-- HTML & CSS -->
        <div class="card text-center">
            <p class="font-bold text-purple-200 text-lg">📚 HTML & CSS</p>
            <a href="{{ asset('materiales/presentacion-html-css.pdf') }}" target="_blank" class="underline hover:text-green-300 block mt-2">
                Presentación HTML y CSS (PDF)
            </a>
            <p class="text-sm text-green-400 mt-2">Ejemplos visuales y práctica</p>
        </div>
    </div>

    <div class="text-center mt-12">
        <a href="{{ route('alumno') }}" class="text-green-400 hover:underline">← Volver al panel del alumno</a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function forzarDescargaZip() {
        const enlace = document.createElement('a');
        enlace.href = "{{ url('storage/materiales/sql-basico.zip') }}";
        enlace.setAttribute('download', 'sql-basico.zip');
        document.body.appendChild(enlace);
        enlace.click();
        enlace.remove();
    }
</script>
@endpush













