<?php 
use Controller\EmpleadoController;
use Controller\EstadoController;

$estado = new EstadoController();
$nombre = new EmpleadoController();
//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

?>

<h1>Crear Usuario</h1>

<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Usuario</label>
                <input class="form-control" id="readOnlyInput" type="text" name="usuario" placeholder="Ingrese el Nombre del Empleado..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Password</label>
                <input class="form-control" id="readOnlyInput" type="password" name="password" placeholder="Ingrese el Apellido del  Empleado..." required>
            </fieldset>
        </div>
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Estado</label>
                <!--<input class="form-control" id="readOnlyInput" type="number" name="fkEstado" placeholder="Ingrese el estado del Empleado..." required>-->
                <select class="form-select" name="idEstado">
                            <?php 
                                foreach($estado->mostrar() as $row => $item){
                                    echo "<option value='{$item['idEstado']}'>{$item['estado']}</option>";
                                }
                            ?>
                </select>
            </fieldset>
        </div>
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Empleado</label>
                <!--<input class="form-control" id="readOnlyInput" type="number" name="fkEstado" placeholder="Ingrese el estado del Empleado..." required>-->
                <select class="form-select" name="idEmp">
                            <?php 
                                foreach($nombre->mostrar() as $row => $item){
                                    echo "<option value='{$item['idEmp']}'>{$item['nombre']}-{$item['apellido']}</option>";
                                }
                            ?>
                </select>
            </fieldset>
        </div>
        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Crear Usuario</button>

            </div>
        </div>
    </form>
</div>