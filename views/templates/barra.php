<div class="barra">
    <p>Hola: <?php echo $nombre ?? '' ?></p>
    <a href="/logout" class="boton">Cerrar sesion</a>
</div>

<?php if(isset($_SESSION['admin'])){?>

    <div class="barra-servicios">
        <a class="boton" href="/admin">Ver turnos</a>
        <a class="boton" href="/servicios">Ver servicios</a>
        <a class="boton" href="/servicios/crear">Nuevo servicio</a>
    </div>

<?php } ;?>