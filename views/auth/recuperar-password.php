<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Ingresa tu nuevo password.</p>

<?php include_once __DIR__. "/../templates/alertas.php"; ?>

<?php if($error) return; ?>
<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Nuevo Password">
    </div>
    <input type="submit" class="boton" value="Guardar nuevo password">
</form>

<div class="acciones">
    <a class="login-enlace" href="/">Iniciar Sesión</a>
    <a class="login-enlace" href="/crear-cuenta">¿Crear nueva cuenta?</a>
</div>