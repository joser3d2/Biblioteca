<?php 
use Controller\EstadoController;

$estado = new EstadoController();
//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION
?>

<h1>Crear Estado</h1>


<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Estado</label>
                <input class="form-control" id="readOnlyInput" type="text" name="estado" placeholder="Ingrese el Nombre del Estado..." required>
            </fieldset>
        </div>
        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Crear Categoria</button>

            </div>
        </div>
    </form>
    <?php 
    $resultado = $estado->Cestado();
    if ($resultado == "guardado") {
        echo "<div class='alert alert-success mb-5' role='alert'>
                    Estado Creado
                 </div>";
    } elseif ($resultado == "error") {
        echo "<div class='alert alert-danger mb-5' role='alert'>
                    Error
                 </div>";
    }
    //}//CIERRE DE VALIDACION, INICIO SESION OBLIGADO
    ?>
</div>