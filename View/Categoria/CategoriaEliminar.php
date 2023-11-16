<?php

use Controller\CategoriaController;

$descripcionCat = new CategoriaController();

$registro = $descripcionCat->borrar(); //El registro completo de la BD

$descripcionCat->confirmarBorrar();

?>

<form method="post">

    <?php echo $registro['descripcionCat']; ?>
    <br>
    <p>¿Seguro que quiere borrar?</p>

    <input type="hidden" name="idCat" value="<?php echo $registro['idCat']; ?>">

    <button type="submit" class="btn btn-primary">Borrar</button>

</form>