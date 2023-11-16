<?php

use Controller\EstadoController;

$estado = new EstadoController();

$registro = $estado->borrar(); //El registro completo de la BD

$estado->confirmarBorrar();

?>

<form method="post">

    <?php echo $registro['estado']; ?>
    <br>
    <p>¿Seguro que quiere borrar?</p>

    <input type="hidden" name="idEstado" value="<?php echo $registro['idEstado']; ?>">

    <button type="submit" class="btn btn-primary">Borrar</button>

</form>