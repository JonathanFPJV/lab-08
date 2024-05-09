<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="{{ asset('css/registrostilo.css') }}" rel="stylesheet">
</head>
<body>
    <div class="register-container">
        <h2>Registro de Usuario</h2>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="text" name="apellido" placeholder="Apellido" required><br>
            <input type="text" name="usuario" placeholder="Usuario" required><br>
            <input type="text" name="correo" placeholder="Correo" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <input type="submit" value="Registrar">
        </form>
        <button onclick="window.location.href='{{ url('/login') }}'">Regresar al inicio</button>
    </div>
</body>
</html>