<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - Plataforma E-learning</title>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Share Tech Mono', monospace;
            background-color: #000;
            color: #0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: rgba(0, 255, 0, 0.05);
            border: 1px solid #0f0;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px #0f0;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        img.logo {
            width: 100px;
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 30px;
            font-size: 24px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #0f0;
            background: #000;
            color: #0f0;
        }
        button {
            background-color: #0f0;
            color: #000;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }
        a {
            color: #0f0;
            text-decoration: underline;
            display: block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
        <h1>Accede a tu cuenta</h1>
        @if (session('status'))
            <div style="margin-bottom: 20px; color: lime;">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Correo electrónico" required autofocus>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
    </div>
</body>
</html>




