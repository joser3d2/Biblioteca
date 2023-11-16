<?php

use Controller\EstadoController;

//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

$estado = new EstadoController;

$listado = $estado->mostrar();

?>
<h1>Estado de libros</h1>

<table class="table table-hove mt-3">
    <thead>
        <tr class="table-success">
            <th scope="row">No</th>
            <td>Estado</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listado as $row => $item) : ?>
            <tr class="table-success">
                <td><?php echo $item['idEstado']; ?></td>
                <td><?php echo $item['estado']; ?></td>
                <td><a href='index.php?action=estadoEditar&idEstado=<?php echo $item['idEstado']; ?>'><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href='index.php?action=estadoEliminar&idEstado=<?php echo $item['idEstado']; ?>'><button type="button" class="btn btn-success">Eliminar</button></a></td>    
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //} ?>