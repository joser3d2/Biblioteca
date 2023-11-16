<?php  

namespace Controller;

use Model\EmpleadoModel;

class EmpleadoController{

    public function Cempleado(){

        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['direccion']) && !empty($_POST['dpi']) && !empty($_POST['rol']) && !empty($_POST['idEstado'])){
            $datos = array(
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "telefono" => $_POST['telefono'],
                "direccion" => $_POST['direccion'],
                "dpi" => $_POST['dpi'],
                "rol" => $_POST['rol'],
                "fkEstado" => $_POST['idEstado']
            );
            print_r($datos);
            $respuesta = EmpleadoModel::guardarEmpleado($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public function mostrar(){
        $nombre = EmpleadoModel::mostrarEmpleado();
        return $nombre;
    }
    public function editar(){
        $idEmp = $_GET['idEmp'];
        $idEmp = EmpleadoModel::editarEmpleado($idEmp);
        return $idEmp;
    }
    public function actualizar(){
        if(!empty($_POST['nombre'])){
            $datos = array(
                "idEmp" => $_POST['idEmp'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "telefono" => $_POST['telefono'],
                "direccion" => $_POST['direccion'],
                "dpi" => $_POST['dpi'],
                "rol" => $_POST['rol'],
                "fkEstado" => $_POST['idEstado']
                
            );
            $respuesta = EmpleadoModel::actualizarEmpleado($datos);

            if($respuesta){
                echo '<script>window.location.href = "index.php?action=EmpleadoMostrar";</script>';
            }
        }
    }
    public function borrar(){
        if(!empty($_GET['idEmp'])){
            $nombre = EmpleadoModel::borrarEmpleado($_GET['idEmp']);
            return $nombre;
        }
    }
    public function confirmarBorrar(){
        if(!empty($_POST['idEmp'])){
            $nombre = EmpleadoModel::borrarConfirmadoEmpleado($_POST['idEmp']);
            if($nombre){
                echo '<script>window.location.href = "index.php?action=EmpleadoMostrar";</script>';
            }
        }
    }

}




?>