<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <style>
        body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f6f9; margin: 0; }
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 340px; }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 4px; font-weight: bold; font-size: 14px; }
        input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 15px; font-weight: bold; margin-top: 10px; }
        .error { color: red; font-size: 12px; margin-bottom: 10px; }
        .links { margin-top: 15px; text-align: center; font-size: 14px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Crear Cuenta</h2>

        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre Completo:</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="form-group">
                <label>DNI:</label>
                <input type="text" name="dni" value="{{ old('dni') }}" required>
            </div>
            <div class="form-group">
                <label>Correo Electrónico:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" name="password" required>
            </div>
            <div class="form-group">
                <label>Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>

        <div class="links">
            ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </div>
    </div>
</body>
</html>