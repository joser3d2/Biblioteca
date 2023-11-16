<?php

use Controller\EstadoController;

$estado = new EstadoController();

$registro = $estado->editar();
$estado->actualizar();
?>
<h1>Actualizar Estado</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Estado</label>
                <input class="form-control" id="readOnlyInput" type="text" name="estado" placeholder="Ingrese el Nombre del Estado..."  value="<?php echo $registro['estado']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-lg btn-primary" type="submit">Actualizar</button>
            </div>
            <input class="form-control" id="readOnlyInput" type="hidden" name="idEstado" value="<?php echo $registro['idEstado']; ?>" required>

        </div>
    </form>
</div>