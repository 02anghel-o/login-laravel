<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f6f9; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 320px; }
        input[type="email"] { width: 100%; padding: 8px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h3>Recuperar Contraseña</h3>
        <p style="font-size: 13px;">Ingresa tu correo para enviarte el enlace de recuperación vía Gmail.</p>

        @if (session('status'))
            <p style="color: green; font-size: 13px;">{{ session('status') }}</p>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <label>Correo Electrónico:</label>
            <input type="email" name="email" required>
            <button type="submit">Enviar Enlace</button>
        </form>
        <p><a href="{{ route('login') }}">Volver al Login</a></p>
    </div>
</body>
</html>