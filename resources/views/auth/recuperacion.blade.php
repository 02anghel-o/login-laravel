<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Frutiger Aero</title>
    <link rel="stylesheet" href="{{ asset('css/frutiger.css') }}">
</head>
<body>

    <div class="frutiger-card">
        <h2 class="frutiger-title">Recuperar Contraseña</h2>

        <p style="font-size: 13px; color: #002d4d; text-align: center; margin-bottom: 20px; line-height: 1.4;">
            Ingresa tu correo para enviarte el enlace de recuperación vía Gmail.
        </p>

        @if (session('status'))
            <div style="background: rgba(200, 255, 210, 0.85); color: #005623; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px; text-align: center;">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div style="background: rgba(255, 210, 210, 0.85); color: #840000; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div>
                <label class="frutiger-label">Correo Electrónico:</label>
                <input type="email" name="email" class="frutiger-input" value="{{ old('email') }}" placeholder="ejemplo@correo.com" required autofocus>
            </div>

            <button type="submit" class="frutiger-btn">Enviar Enlace</button>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('login') }}" class="frutiger-link">Volver al Login</a>
            </div>
        </form>
    </div>

</body>
</html>