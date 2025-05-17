@extends('layouts.app')

@section('title', 'Sobre la Academia')

@section('content')
<div class="container text-center">
    <h1 class="text-green">🏫 Sobre Nuestra Academia</h1>
    <p style="margin-top: 1rem;">
        Somos una academia especializada en el desarrollo de aplicaciones web. Nuestra misión es formar a futuros profesionales
        en tecnologías como HTML5, CSS3, JavaScript, Laravel y más.
    </p>
    
    <div class="grid" style="margin-top: 2rem;">
        <div class="card">
            <h2>🎯 Misión</h2>
            <p>Brindar una educación digital accesible, práctica y de alta calidad.</p>
        </div>
        <div class="card">
            <h2>💡 Visión</h2>
            <p>Ser un referente en formación tecnológica online a nivel nacional.</p>
        </div>
        <div class="card">
            <h2>🤝 Valores</h2>
            <p>Compromiso, innovación, respeto y excelencia educativa.</p>
        </div>
    </div>

    <a href="{{ url('/') }}" class="btn">← Volver al inicio</a>
</div>
@endsection
