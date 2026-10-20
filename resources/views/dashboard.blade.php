<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Portal de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/frutiger.css') }}">
</head>
<body>

    <div class="frutiger-card" style="max-width: 550px; text-align: left;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 1px solid rgba(0,77,122,0.2); padding-bottom: 12px;">
            <h2 class="frutiger-title" style="margin: 0; text-align: left;">Bienvenido/a 👋</h2>
            <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                @csrf
                <button type="submit" class="frutiger-btn" style="width: auto; padding: 6px 14px; font-size: 13px; margin: 0; background: linear-gradient(180deg, #ff6b6b 0%, #c0392b 100%) !important; border-color: #962d22 !important;">
                    Cerrar Sesión
                </button>
            </form>
        </div>

        <p style="font-size: 14px; color: #003352; margin-bottom: 20px;">
            Has autenticado exitosamente tu cuenta en la plataforma. A continuación se presentan tus datos registrados en el sistema:
        </p>

        <div style="background: rgba(255, 255, 255, 0.6); border-radius: 12px; padding: 18px; border: 1px solid rgba(255, 255, 255, 0.9); box-shadow: inset 0 1px 3px rgba(0,0,0,0.05);">
            <div style="margin-bottom: 12px;">
                <span class="frutiger-label" style="display: inline-block; width: 140px;">Nombre Completo:</span>
                <span style="font-weight: 700; color: #004b80;">{{ Auth::user()->name }}</span>
            </div>
            <div style="margin-bottom: 12px;">
                <span class="frutiger-label" style="display: inline-block; width: 140px;">Documento (DNI):</span>
                <span style="font-weight: 700; color: #004b80;">{{ Auth::user()->dni }}</span>
            </div>
            <div style="margin-bottom: 0;">
                <span class="frutiger-label" style="display: inline-block; width: 140px;">Correo Registrado:</span>
                <span style="font-weight: 700; color: #004b80;">{{ Auth::user()->email }}</span>
            </div>
        </div>

        <div style="margin-top: 25px; padding: 12px; background: rgba(18, 216, 250, 0.15); border-radius: 10px; border: 1px solid rgba(18, 216, 250, 0.4); text-align: center; font-size: 13px; color: #004d7a;">
            🔒 Sesión encriptada mediante algoritmo <strong>Bcrypt</strong> y autenticación segura por Laravel.
        </div>
    </div>

</body>
</html>