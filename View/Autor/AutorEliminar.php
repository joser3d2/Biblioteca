<?php

use Controller\AutorController;

$nombre = new AutorController();

$registro = $nombre->borrar(); //El registro completo de la BD

$nombre->confirmarBorrar();

?>

<form method="post">

    <?php echo $registro['nombre']; ?>
    <br>
    <?php echo $registro['apellido']; ?>
    <p>¿Seguro que quiere borrar?</p>

    <input type="hidden" name="idautor" value="<?php echo $registro['idautor']; ?>">

    <button type="submit" class="btn btn-primary">Borrar</button>

</form>