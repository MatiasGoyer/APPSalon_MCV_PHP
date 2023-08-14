<h1 class="nombre-pagina">Login</h1>
<p class="descripcion-pagina">Iniciar sesión con tus datos</p>

<?php include_once __DIR__. "/../templates/alertas.php"; ?>

<form  class="formulario" method="POST" action="/">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" id="email" placeholder="Tu email" name="email">
    </div>
    <div class="campo">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"
        placeholder="Tu password">
    </div>
    <input type="submit" class="boton" value="Iniciar Sesión">
</form>

<div class="acciones">
    <a class="login-enlace" href="/crear-cuenta">Crear tu cuenta.</a>
    <a class="login-enlace" href="/olvide">¿Olvidaste tu contraseña?</a>
</div>