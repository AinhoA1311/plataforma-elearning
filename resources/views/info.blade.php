@extends('layouts.app')

@section('title', 'Información de la Academia')

@section('content')
<h1 class="text-green text-center">ℹ️ Información de la Academia</h1>

<div class="card">
    <p>
        Somos una academia especializada en formación de desarrolladores web. <br>
        Nuestra misión es ofrecer enseñanza de calidad en tecnologías actuales como Laravel, Vue, HTML, CSS y más.
    </p>
    <p>
        📍 Dirección: Calle de la Educación, 123, Cantabria<br>
        📧 Email: contacto@plataforma-elearning.com<br>
        📞 Teléfono: +34 912 345 678
    </p>
</div>

<div class="text-center" style="margin-top: 2rem;">
    <a href="{{ url('/') }}" class="btn">← Volver al inicio</a>
</div>
@endsection
