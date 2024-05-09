@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/logines.css') }}" rel="stylesheet">
</head>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error)) : ?>
        <p class="error-message"><?= $error ?></p>
    <?php endif; ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="usuario" placeholder="Usuario" required><br>
        <input type="password" name="contraseña" placeholder="Contraseña" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <p class="forgot-password">¿Olvidaste tu contraseña? <a href="#">Recupérala aquí</a>.</p>
    <button class="register-button" onclick="window.location.href = '{{ url('/registrar') }}';">Registrarse</button>
</div>

@endsection
