<?php

use Controller\CategoriaController;

//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

$descripcionCat = new CategoriaController;

$listado = $descripcionCat->mostrar();

?>
<h1>Categorias de libros</h1>

<table class="table table-hove mt-3">
    <thead>
        <tr class="table-success">
            <th scope="row">No</th>
            <td>Descripcion</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listado as $row => $item) : ?>
            <tr class="table-success">
                <td><?php echo $item['idCat']; ?></td>
                <td><?php echo $item['descripcionCat']; ?></td>
                <td><a href='index.php?action=CategoriaEditar&idCat=<?php echo $item['idCat']; ?>'><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href='index.php?action=CategoriaEliminar&idCat=<?php echo $item['idCat']; ?>'><button type="button" class="btn btn-success">Eliminar</button></a></td>    
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //} ?>