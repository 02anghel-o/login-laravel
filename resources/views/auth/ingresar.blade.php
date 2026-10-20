<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Frutiger Aero</title>
    <link rel="stylesheet" href="{{ asset('css/frutiger.css') }}">
</head>
<body>

    <div class="frutiger-card">
        <h2 class="frutiger-title">Iniciar Sesión</h2>

        @if (session('status'))
            <div style="color: #005623; background: rgba(200, 255, 210, 0.8); padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px; text-align: center;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label class="frutiger-label">Correo Electrónico</label>
                <input type="email" name="email" class="frutiger-input" placeholder="ejemplo@correo.com" required autofocus>
            </div>

            <div>
                <label class="frutiger-label">Contraseña</label>
                <input type="password" name="password" class="frutiger-input" placeholder="••••••••" required>
            </div>

            <button type="submit" class="frutiger-btn">INGRESAR</button>

            <div style="text-align: center; margin-top: 15px;">
                <a href="{{ route('auth.google') }}" style="display: block; background: rgba(255, 255, 255, 0.9); border: 1.5px solid #4285F4; border-radius: 10px; padding: 10px; color: #4285F4; font-weight: 700; text-decoration: none; box-shadow: inset 0 1px 3px rgba(0,0,0,0.1); transition: all 0.2s;">
                    🔵 Continuar con Google
                </a>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('password.request') }}" class="frutiger-link">¿Olvidaste tu contraseña?</a>
            </div>

            <div style="text-align: center; margin-top: 10px;">
                <span style="font-size: 13px; color: #002d4d;">¿No tienes cuenta?</span>
                <a href="{{ route('register') }}" class="frutiger-link">Regístrate aquí</a>
            </div>
        </form>
    </div>

</body>
</html>