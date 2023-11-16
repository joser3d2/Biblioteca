<?php 

use Controller\EmpleadoController;

$nombre = new EmpleadoController();

$registro = $nombre->editar();
$nombre->actualizar();
?>

<h1>Actualizar Empleado</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Nombre</label>
                <input class="form-control" id="readOnlyInput" type="text" name="nombre" placeholder="Ingrese el Nombre del Empleado..." value="<?php echo $registro['nombre']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Apellido</label>
                <input class="form-control" id="readOnlyInput" type="text" name="apellido" placeholder="Ingrese el Apellido del  Empleado..." value="<?php echo $registro['apellido']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Telefono</label>
                <input class="form-control" id="readOnlyInput" type="text" name="telefono" placeholder="Ingrese el telefono del Empleado..." value="<?php echo $registro['telefono']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Direccion</label>
                <input class="form-control" id="readOnlyInput" type="text" name="direccion" placeholder="Ingrese la dirección del Empleado..." value="<?php echo $registro['direccion']; ?>" required>
            </fieldset>
        </div>
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Estado</label>
                <input class="form-control" id="readOnlyInput" type="number" name="fkEstado" placeholder="Ingrese el estado del Empleado..." value="<?php echo $registro['fkEstado']; ?>" required>
              
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">DPI</label>
                <input class="form-control" id="readOnlyInput" type="text" name="dpi" placeholder="Ingrese el DPI del Empleado..." value="<?php echo $registro['dpi']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Rol</label>
                <input class="form-control" id="readOnlyInput" type="text" name="rol" placeholder="Ingrese el Rol del Empleado..." value="<?php echo $registro['rol']; ?>" required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Actualizar</button>

            </div>
        </div>
        <input class="form-control" id="readOnlyInput" type="hidden" name="idEmp" value="<?php echo $registro['idEmp']; ?>" required>
    </form>
</div>