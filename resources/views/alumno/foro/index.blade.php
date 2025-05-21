@extends('layouts.app')

@section('title', 'Foro / Comunidad')

@section('content')
<div class="container">
    <h1 class="text-green text-3xl font-bold mb-6 text-center">💬 Foro / Comunidad</h1>
    <p class="text-green-300 text-center mb-8">Participa en la comunidad compartiendo ideas, dudas y recursos con otros alumnos.</p>

    {{-- Mostrar mensajes simulados --}}
    @if (!empty($mensajes))
        <div class="space-y-2 mb-6">
            @foreach ($mensajes as $msg)
                <div class="border border-green-400 bg-black p-2 rounded">
                    <span class="text-green-300 font-bold">{{ $msg['autor'] }}:</span>
                    <span class="text-white">{{ $msg['texto'] }}</span>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Formulario --}}
    <form action="{{ route('alumno.foro.publicar') }}" method="POST" class="mb-10 text-center">
        @csrf
        <textarea name="mensaje" rows="2" placeholder="Escribe tu mensaje..." class="w-1/2 p-2 rounded bg-black border border-green-500 text-white"></textarea>
        <br>
        <button type="submit" class="mt-2 bg-green-600 hover:bg-green-700 text-white px-4 py-1 rounded">Publicar</button>
    </form>

    {{-- Mostrar temas con comentarios --}}
    <div class="space-y-6">
        @foreach ($temas as $tema)
            <div class="border border-green-500 rounded p-4 bg-black">
                <p class="font-bold text-pink-500">📌 Tema: {{ $tema['titulo'] }}</p>
                @foreach ($tema['comentarios'] as $comentario)
                    <p><span class="font-bold text-green-300">{{ $comentario['autor'] }}:</span> {{ $comentario['texto'] }}</p>
                @endforeach
            </div>
        @endforeach
    </div>

    <div class="text-center mt-10">
        <a href="{{ route('alumno') }}" class="text-green-400 hover:underline">← Volver al panel del alumno</a>
    </div>
</div>
@endsection






