<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario - Portal Web</title>
    <link rel="stylesheet" href="{{ asset('css/frutiger.css') }}">
    <style>
        .frutiger-card-wide {
            max-width: 650px !important;
        }
        .register-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }
        .full-width {
            grid-column: span 2;
        }
    </style>
</head>
<body>

    <div class="frutiger-card frutiger-card-wide">
        <h2 class="frutiger-title" style="margin-bottom: 15px;">Crear Nueva Cuenta</h2>
        <p style="font-size: 13px; color: #002d4d; text-align: center; margin-bottom: 25px;">
            Completa los campos para registrarte en el sistema de manera segura.
        </p>

        @if ($errors->any())
            <div style="background: rgba(255, 210, 210, 0.85); color: #840000; padding: 10px; border-radius: 8px; margin-bottom: 15px; font-size: 13px;" class="full-width">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="full-width">
                <label class="frutiger-label">Nombre Completo:</label>
                <input type="text" name="name" class="frutiger-input" value="{{ old('name') }}" placeholder="Ej. Juan Pérez" required autofocus>
            </div>

            <div>
                <label class="frutiger-label">Documento (DNI):</label>
                <input type="text" name="dni" class="frutiger-input" value="{{ old('dni') }}" placeholder="8 dígitos" required maxlength="15">
            </div>

            <div>
                <label class="frutiger-label">Correo Electrónico:</label>
                <input type="email" name="email" class="frutiger-input" value="{{ old('email') }}" placeholder="correo@domain.com" required>
            </div>

            <div>
                <label class="frutiger-label">Contraseña:</label>
                <input type="password" name="password" class="frutiger-input" placeholder="••••••••" required>
            </div>

            <div>
                <label class="frutiger-label">Confirmar Clave:</label>
                <input type="password" name="password_confirmation" class="frutiger-input" placeholder="••••••••" required>
            </div>

            <div class="full-width" style="margin-top: 10px;">
                <button type="submit" class="frutiger-btn">REGISTRARME AHORA</button>
            </div>

            <div class="full-width" style="text-align: center; margin-top: 15px;">
                <span style="font-size: 13px; color: #002d4d;">¿Ya tienes una cuenta activa?</span>
                <a href="{{ route('login') }}" class="frutiger-link">Inicia sesión aquí</a>
            </div>
        </form>
    </div>

</body>
</html>