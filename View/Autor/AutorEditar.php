<?php

use Controller\AutorController;

$nombre = new AutorController();

$registro = $nombre->editar();
$nombre->actualizar();
?>
<h1>Actualizar Autor</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Nombre</label>
                <input class="form-control" id="readOnlyInput" type="text" name="nombre" placeholder="Ingrese el Nombre de Autor..."  value="<?php echo $registro['nombre']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Apellido</label>
                <input class="form-control" id="readOnlyInput" type="text" name="apellido" placeholder="Ingrese el Apellido de Autor..."  value="<?php echo $registro['apellido']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-lg btn-primary" type="submit">Actualizar</button>
            </div>
            <input class="form-control" id="readOnlyInput" type="hidden" name="idautor" value="<?php echo $registro['idautor']; ?>" required>

        </div>
    </form>
</div>