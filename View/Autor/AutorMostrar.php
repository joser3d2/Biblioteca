<?php

use Controller\AutorController;

//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

$nombre = new AutorController;

$listado = $nombre->mostrar();

?>
<h1>Autores</h1>

<table class="table table-hove mt-3">
    <thead>
        <tr class="table-success">
            <th scope="row">No</th>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listado as $row => $item) : ?>
            <tr class="table-success">
                <td><?php echo $item['idautor']; ?></td>
                <td><?php echo $item['nombre']; ?></td>
                <td><?php echo $item['apellido']; ?></td>
                <td><a href='index.php?action=autorEditar&idautor=<?php echo $item['idautor']; ?>'><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href='index.php?action=autorEliminar&idautor=<?php echo $item['idautor']; ?>'><button type="button" class="btn btn-success">Eliminar</button></a></td>    
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //} ?>