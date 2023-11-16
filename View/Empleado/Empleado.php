<?php 
use Controller\EmpleadoController;

$nombre = new EmpleadoController();
//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

?>

<h1>Crear Empleado</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Nombre</label>
                <input class="form-control" id="readOnlyInput" type="text" name="nombre" placeholder="Ingrese el Nombre del Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Apellido</label>
                <input class="form-control" id="readOnlyInput" type="text" name="apellido" placeholder="Ingrese el Apellido del  Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Telefono</label>
                <input class="form-control" id="readOnlyInput" type="text" name="telefono" placeholder="Ingrese el telefono del Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Direccion</label>
                <input class="form-control" id="readOnlyInput" type="text" name="direccion" placeholder="Ingrese la dirección del Empleado..." required>
            </fieldset>
        </div>
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Estado</label>
                <input class="form-control" id="readOnlyInput" type="number" name="fkEstado" placeholder="Ingrese el estado del Empleado..." required>
              
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">DPI</label>
                <input class="form-control" id="readOnlyInput" type="text" name="dpi" placeholder="Ingrese el DPI del Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Rol</label>
                <input class="form-control" id="readOnlyInput" type="text" name="rol" placeholder="Ingrese el Rol del Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Crear Empleado</button>

            </div>
        </div>
    </form>
    <?php 
    $resultado = $nombre->Cempleado();
    if ($resultado == "guardado") {
        echo "<div class='alert alert-success mb-5' role='alert'>
                    Empleado Creado
                 </div>";
    } elseif ($resultado == "error") {
        echo "<div class='alert alert-danger mb-5' role='alert'>
                    Error
                 </div>";
    }
    //}//CIERRE DE VALIDACION, INICIO SESION OBLIGADO
    ?>
   
    

</div>