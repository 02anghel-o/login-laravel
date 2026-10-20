<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seguridad - Actualizar Credenciales</title>
    <link rel="stylesheet" href="{{ asset('css/frutiger.css') }}">
</head>
<body>

    <div class="frutiger-card">
        <div style="text-align: center; margin-bottom: 10px;">
            <span style="background: rgba(0, 120, 215, 0.2); color: #004b80; padding: 6px 14px; border-radius: 20px; font-size: 12px; font-weight: 700; border: 1px solid rgba(0, 120, 215, 0.4);">
                🔒 PROTOCOLO DE SEGURIDAD
            </span>
        </div>

        <h2 class="frutiger-title" style="margin-top: 10px;">Restablecer Clave</h2>

        <p style="font-size: 13px; color: #002d4d; text-align: center; margin-bottom: 20px;">
            Ingresa y confirma tu nueva contraseña para restaurar el acceso al sistema.
        </p>

        @if ($errors->any())
            <div style="background: rgba(255, 210, 210, 0.85); color: #840000; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            
            <div>
                <label class="frutiger-label">Correo Electrónico:</label>
                <input type="email" name="email" class="frutiger-input" value="{{ old('email', $request->email) }}" required readonly style="background: rgba(200, 200, 200, 0.4) !important; cursor: not-allowed;">
            </div>

            <div>
                <label class="frutiger-label">Nueva Contraseña:</label>
                <input type="password" name="password" class="frutiger-input" placeholder="Mínimo 8 caracteres" required autofocus>
            </div>

            <div>
                <label class="frutiger-label">Confirmar Nueva Contraseña:</label>
                <input type="password" name="password_confirmation" class="frutiger-input" placeholder="Repite la contraseña" required>
            </div>

            <button type="submit" class="frutiger-btn" style="margin-top: 5px;">GUARDAR NUEVA CONTRASEÑA</button>

            <div style="text-align: center; margin-top: 20px;">
                <a href="{{ route('login') }}" class="frutiger-link">← Cancelar y volver al inicio</a>
            </div>
        </form>
    </div>

</body>
</html>