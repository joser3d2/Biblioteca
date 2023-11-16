<?php

use Controller\EstanteriaController;

//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

$ubicacion = new EstanteriaController;

$listado = $ubicacion->mostrar();

?>
<h1>Estanterias</h1>

<table class="table table-hove mt-3">
    <thead>
        <tr class="table-success">
            <th scope="row">No</th>
            <td>Ubicacion</td>
            
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listado as $row => $item) : ?>
            <tr class="table-success">
                <td><?php echo $item['idEst']; ?></td>
                <td><?php echo $item['ubicacion']; ?></td>
                
                <td><a href='index.php?action=EstanteriaEditar&idEst=<?php echo $item['idEst']; ?>'><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href='index.php?action=EstanteriaEliminar&idEst=<?php echo $item['idEst']; ?>'><button type="button" class="btn btn-success">Eliminar</button></a></td>    
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //} ?>