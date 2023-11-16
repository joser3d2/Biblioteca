<?php

use Controller\EstanteriaController;

$ubicacion = new EstanteriaController();

$registro = $ubicacion->editar();
$ubicacion->actualizar();
?>
<h1>Actualizar Estanteria</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Ubicacion</label>
                <input class="form-control" id="readOnlyInput" type="text" name="ubicacion" placeholder="Ingrese el Nombre de Autor..."  value="<?php echo $registro['ubicacion']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-lg btn-primary" type="submit">Actualizar</button>
            </div>
            <input class="form-control" id="readOnlyInput" type="hidden" name="idEst" value="<?php echo $registro['idEst']; ?>" required>

        </div>
    </form>
</div>