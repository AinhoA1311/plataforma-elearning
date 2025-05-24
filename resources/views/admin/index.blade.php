@extends('layouts.app')

@section('title', 'Foro del Alumno')

@section('content')
<div class="container text-center">
    <h1 class="text-green">Foro de la Comunidad</h1>
    <p>Comparte ideas, dudas y recursos con otros alumnos.</p>

    <div class="foro-temas mb-4">
        <h2 class="text-xl font-semibold">Temas destacados</h2>

        @foreach ($temas as $tema)
            <div class="card mt-3 p-3">
                <h3 class="text-lg font-bold">{{ $tema['titulo'] }}</h3>
                <ul class="text-left pl-4 list-disc">
                    @foreach ($tema['comentarios'] as $comentario)
                        <li><strong>{{ $comentario['autor'] }}:</strong> {{ $comentario['texto'] }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <div class="foro-comunidad mt-5">
        <h2 class="text-xl font-semibold mb-2">Comentarios de la comunidad</h2>

        @foreach ($mensajes as $msg)
            <div class="border rounded p-2 my-2 bg-gray-900 text-white">
                <p><strong>{{ $msg->autor }}:</strong> {{ $msg->texto }}</p>
            </div>
        @endforeach
    </div>

    <div class="foro-formulario mt-5">
        <h2 class="text-xl font-semibold mb-2">Escribe tu comentario</h2>
        <form method="POST" action="{{ route('alumno.foro.publicar') }}">
            @csrf
            <textarea name="mensaje" rows="4" class="w-full p-2 rounded" placeholder="Escribe aquí tu mensaje..." required></textarea>
            <br>
            <button type="submit" class="btn mt-2">Publicar</button>
        </form>
    </div>

    <a href="{{ route('alumno.dashboard') }}" class="btn mt-5">← Volver al Panel</a>
</div>
@endsection


