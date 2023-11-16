<?php

use Controller\EstanteriaController;

$ubicacion = new EstanteriaController();

$registro = $ubicacion->borrar(); //El registro completo de la BD

$ubicacion->confirmarBorrar();

?>

<form method="post">

    <?php echo $registro['ubicacion']; ?>
    <br>
    
    <p>¿Seguro que quiere borrar?</p>

    <input type="hidden" name="idEst" value="<?php echo $registro['idEst']; ?>">

    <button type="submit" class="btn btn-primary">Borrar</button>

</form>