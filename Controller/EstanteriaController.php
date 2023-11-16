<?php  

namespace Controller;

use Model\EstanteriaModel;

class EstanteriaController{

    public function Cestanteria(){

        if(!empty($_POST['ubicacion'])){
            $datos = array(
                "ubicacion" => $_POST['ubicacion']
            );
            $respuesta = EstanteriaModel::guardarEstanteria($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public function mostrar(){
        $ubicacion = EstanteriaModel::mostrarEstanteria();
        return $ubicacion;
    }
    public function editar(){
        $idEst = $_GET['idEst'];
        $idEst = EstanteriaModel::editarEstanteria($idEst);
        return $idEst;
    }
    public function actualizar(){
        if( !empty($_POST['ubicacion'])){
            $datos = array(
                "idEst" => $_POST['idEst'],
                "ubicacion" => $_POST['ubicacion'],
            );
            $respuesta = EstanteriaModel::actualizarEstanteria($datos);

            if($respuesta){
                echo '<script>window.location.href = "index.php?action=EstanteriaMostrar";</script>';
            }
        }
    }
    public function borrar(){
        if(!empty($_GET['idEst'])){
            $ubicacion = EstanteriaModel::borrarEstanteria($_GET['idEst']);
            return $ubicacion;
        }
    }
    public function confirmarBorrar(){
        if(!empty($_POST['idEst'])){
            $ubicacion = EstanteriaModel::borrarConfirmadoEstanteria($_POST['idEst']);
            if($ubicacion){
                echo '<script>window.location.href = "index.php?action=EstanteriaMostrar";</script>';
            }
        }
    }

}




?>