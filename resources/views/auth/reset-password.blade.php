<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Contraseña</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f6f9; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 320px; }
        input { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h3>Establecer Nueva Contraseña</h3>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" value="{{ $email ?? old('email') }}" required placeholder="Correo">
            <input type="password" name="password" required placeholder="Nueva contraseña">
            <input type="password" name="password_confirmation" required placeholder="Confirmar contraseña">
            <button type="submit">Guardar Contraseña</button>
        </form>
    </div>
</body>
</html>