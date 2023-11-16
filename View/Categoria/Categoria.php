<?php 
use Controller\CategoriaController;

$descripcionCat = new CategoriaController();
//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

?>

<h1>Crear Categoria</h1>


<div class="container-login">
    <form class="form" method="POST">
        <div class="form-group">
            <fieldset>
                <label class="form-label mt-4" for="readOnlyInput">Categoria</label>
                <input class="form-control" id="readOnlyInput" type="text" name="descripcionCat" placeholder="Ingrese el Nombre de la Categoria..." required>
            </fieldset>
        </div>
        <div class="form-group">
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Crear Categoria</button>

            </div>
        </div>
    </form>

    <?php 
    $resultado = $descripcionCat->Ccategoria();
    if ($resultado == "guardado") {
        echo "<div class='alert alert-success mb-5' role='alert'>
                    Categoria Creado
                 </div>";
    } elseif ($resultado == "error") {
        echo "<div class='alert alert-danger mb-5' role='alert'>
                    Error
                 </div>";
    }
    //}//CIERRE DE VALIDACION, INICIO SESION OBLIGADO
    ?>
    

</div>