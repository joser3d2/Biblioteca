<?php

use Controller\EmpleadoController;

//if(!empty($_SESSION['id'])){//VALIDACIÓN, OBLIGATORIO INICIO DE SESION

$nombre = new EmpleadoController;

$listado = $nombre->mostrar();

?>
<h1>Lista de datos Empleados</h1>

<table class="table table-hove mt-3">
    <thead>
        <tr class="table-primary">
            <th scope="row">No</th>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Telefono</td>
            <td>Direccion</td>
            <td>Dpi</td>
            <td>Rol</td>
            <td>Estado</td>
            <td>Editar</td>
            <td>Eliminar</td>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($listado as $row => $item) : ?>
            <tr class="table-primary">
                <td><?php echo $item['idEmp']; ?></td>
                <td><?php echo $item['nombre']; ?></td>
                <td><?php echo $item['apellido']; ?></td>
                <td><?php echo $item['telefono']; ?></td>
                <td><?php echo $item['direccion']; ?></td>
                <td><?php echo $item['dpi']; ?></td>
                <td><?php echo $item['rol']; ?></td>
                <td><?php echo $item['fkEstado']; ?></td>
                <td><a href='index.php?action=EmpleadoEditar&idEmp=<?php echo $item['idEmp']; ?>'><button type="button" class="btn btn-success">Editar</button></a></td>
                <td><a href='index.php?action=EmpleadoEliminar&idEmp=<?php echo $item['idEmp']; ?>'><button type="button" class="btn btn-success">Eliminar</button></a></td> 
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php //} ?>