<?php 
namespace Controller;

use Model\EstadoModel;

class EstadoController{
    public function Cestado(){
        if(!empty($_POST['estado'])){
            $datos = array(
                'estado' => $_POST['estado'],
            );
            $respuesta = EstadoModel::guardarEstado($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public function mostrar(){
        $estado = EstadoModel::mostrarEstado();
        return $estado;
    }
    public function editar(){
        $idEstado = $_GET['idEstado'];
        $idEstado = EstadoModel::editarEstado($idEstado);
        return $idEstado;
    }
    public function actualizar(){
        if(!empty($_POST['estado'])){
            $datos = array(
                "idEstado" => $_POST['idEstado'],
                "estado" => $_POST['estado']
            );
            $respuesta = EstadoModel::actualizarEstado($datos);
            if($respuesta){
                echo '<script>window.location.href = "index.php?action=estadoMostrar";</script>';
            }
        }
    }
    public function borrar(){
        if(!empty($_GET['idEstado'])){
            $estado = EstadoModel::borrarEstado($_GET['idEstado']);
            return $estado;
        }
    }

    public function confirmarBorrar(){
        if(!empty($_POST['idEstado'])){
            $estado = EstadoModel::borrarConfirmadoEstado($_POST['idEstado']);
            if($estado){
                echo '<script>window.location.href = "index.php?action=estadoMostrar";</script>';
            }
        }
    }
}



?>