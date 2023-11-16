<?php

use Controller\EmpleadoController;

$nombre = new EmpleadoController();

$registro = $nombre->borrar(); //El registro completo de la BD

$nombre->confirmarBorrar();

?>

<form method="post">

    <?php echo $registro['nombre']; ?>
    <br>
    
    <p>¿Seguro que quiere borrar?</p>

    <input type="hidden" name="idEmp" value="<?php echo $registro['idEmp']; ?>">

    <button type="submit" class="btn btn-primary">Borrar</button>

</form>