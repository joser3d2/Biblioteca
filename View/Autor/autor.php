<?php 
use Controller\AutorController;

$nombre = new AutorController();
//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

?>

<h1>Crear Autor</h1>


<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Nombre</label>
                <input class="form-control" id="readOnlyInput" type="text" name="nombre" placeholder="Ingrese el Nombre de Autor..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Apellido</label>
                <input class="form-control" id="readOnlyInput" type="text" name="apellido" placeholder="Ingrese el Apellido de Autor..." required>
            </fieldset>
        </div>

        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Crear Autor</button>

            </div>
        </div>
    </form>

    <?php 
    $resultado = $nombre->Cautor();
    if ($resultado == "guardado") {
        echo "<div class='alert alert-success mb-5' role='alert'>
                    Autor Creado
                 </div>";
    } elseif ($resultado == "error") {
        echo "<div class='alert alert-danger mb-5' role='alert'>
                    Error
                 </div>";
    }
    //}//CIERRE DE VALIDACION, INICIO SESION OBLIGADO
    ?>
    

</div>