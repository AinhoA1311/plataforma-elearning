<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma E-learning</title>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #0d0d0d;
            color: #00ff99;
            font-family: 'Share Tech Mono', monospace;
        }

        header {
            background-color: #121212;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #00ff99;
        }

        header .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.4rem;
            font-weight: bold;
            color: #00ff99;
        }

        header img {
            height: 30px;
        }

        nav a {
            color: #f0f0f0;
            margin-left: 1rem;
            text-decoration: none;
        }

        nav a:hover {
            color: #00ff99;
        }

        main {
            padding: 2rem;
        }

        footer {
            background-color: #121212;
            color: #888;
            padding: 2rem;
            text-align: center;
            border-top: 1px solid #00ff99;
        }

        .card {
            background-color: #1a1a1a;
            border: 1px solid #00ff99;
            border-radius: 10px;
            padding: 2rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 0 10px #00ff99;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        a.button {
            display: inline-block;
            background-color: #00ff99;
            color: #000;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            margin-top: 2rem;
            text-decoration: none;
            font-weight: bold;
        }

        a.button:hover {
            background-color: #00cc77;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
            Plataforma E-learning
        </div>
        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            @auth
                @if(Auth::user()->role === 'admin')
                    <a href="{{ route('admin') }}">Administración</a>
                @elseif(Auth::user()->role === 'alumno')
                    <a href="{{ route('alumno') }}">Alumno</a>
                @endif
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <strong>Contacto:</strong> contacto@plataforma-elearning.com | <strong>Tel:</strong> +34 912 345 678
        </div>
        <div style="margin: 10px 0;">
            <a href="#" style="color: #00ff99; margin: 0 10px;">Aviso legal</a>
            <a href="#" style="color: #00ff99; margin: 0 10px;">Política de privacidad</a>
            <a href="#" style="color: #00ff99; margin: 0 10px;">Términos de uso</a>
        </div>
        <div>© {{ date('Y') }} Plataforma E-learning. Todos los derechos reservados.</div>
    </footer>
</body>
</html>






