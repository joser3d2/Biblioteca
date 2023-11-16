<?php

use Controller\CategoriaController;

$descripcionCat = new CategoriaController();

$registro = $descripcionCat->editar();
$descripcionCat->actualizar();
?>
<h1>Actualizar Categoria</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Descripcion</label>
                <input class="form-control" id="readOnlyInput" type="text" name="descripcionCat" placeholder="Ingrese el Nombre de la Categoria..."  value="<?php echo $registro['descripcionCat']; ?>" required>
            </fieldset>
        </div>
        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-lg btn-primary" type="submit">Actualizar</button>
            </div>
            <input class="form-control" id="readOnlyInput" type="hidden" name="idCat" value="<?php echo $registro['idCat']; ?>" required>

        </div>
    </form>
</div>