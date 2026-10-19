<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal - Login Exitoso</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f4f6f9; }
        .box { background: white; padding: 20px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #007bff; color: white; }
        .status { color: green; font-weight: bold; }
        button { background: #dc3545; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="box">
        <h2>¡Login Exitoso!</h2>
        <p class="status">✓ Sesión iniciada correctamente en el sistema.</p>

        <h3>Datos del Usuario:</h3>
        <table>
            <tr>
                <th>Campo</th>
                <th>Valor</th>
            </tr>
            <tr>
                <td>Nombre Completo</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>DNI</td>
                <td>{{ Auth::user()->dni }}</td>
            </tr>
            <tr>
                <td>Correo Electrónico</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
        </table>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
    </div>
</body>
</html>