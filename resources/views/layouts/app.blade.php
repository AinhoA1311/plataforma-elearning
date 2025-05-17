<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plataforma E-learning')</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #0d0d0d;
            color: #f0f0f0;
        }
        header {
            background-color: #121212;
            border-bottom: 2px solid #00ff99;
            padding: 1rem;
        }
        .header-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        @media(min-width: 768px) {
            .header-container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
        }
        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            color: #00ff99;
            font-size: 1.2rem;
        }
        .logo img {
            height: 40px;
            margin-right: 10px;
            width: auto;
        }
        nav {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        @media(min-width: 768px) {
            nav {
                flex-direction: row;
                gap: 1.5rem;
            }
        }
        nav a, nav button {
            color: #ccc;
            text-decoration: none;
            background: none;
            border: none;
            font: inherit;
            cursor: pointer;
            transition: color 0.3s;
        }
        nav a:hover, nav button:hover {
            color: #00ff99;
        }
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }
        .text-green {
            color: #00ff99;
            text-shadow: 0 0 5px #00ff99;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .card {
            border: 1px solid #00ff99;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            background-color: #1a1a1a;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 10px #00ff99;
        }
        .btn {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.5rem 1rem;
            background-color: #00ff99;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
        }
        footer {
            background-color: #121212;
            padding: 2rem 1rem;
            color: #999;
            text-align: center;
            font-size: 0.9rem;
            border-top: 1px solid #00ff99;
        }
        footer a {
            color: #00ff99;
            margin: 0 10px;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Cerrar sesión</button>
                    </form>
                @endauth
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div style="margin-bottom: 1rem;">
            <strong>Contacto:</strong> ainhoarosales13@gmail.com |
            <strong>Tel:</strong> 685195119
        </div>
        <div style="margin-bottom: 1rem;">
            <a href="#">Aviso legal</a>
            <a href="#">Política de privacidad</a>
            <a href="#">Términos de uso</a>
        </div>
        <div>© {{ date('Y') }} Plataforma E-learning. Todos los derechos reservados.</div>
    </footer>
</body>
</html>




