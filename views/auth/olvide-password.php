<h1 class="nombre-pagiuna">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu contraseña con tu email.</p>

<?php include_once __DIR__. "/../templates/alertas.php"; ?>

<form class="formulario" action="/olvide" method="POST">
    <div class="campo">
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Tu Email" id="email">
    </div>

    <input type="submit" class="boton" value="Reestablecer contraseña">
</form>