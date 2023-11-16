<?php  

namespace Controller;

use Model\CategoriaModel;

class CategoriaController{

    public function Ccategoria(){

        if(!empty($_POST['descripcionCat'])){
            $datos = array(
                "descripcionCat" => $_POST['descripcionCat'],
            );
            $respuesta = CategoriaModel::guardarCategoria($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public function mostrar(){
        $descripcionCat = CategoriaModel::mostrarCategoria();
        return $descripcionCat;
    }
    public function editar(){
        $idCat = $_GET['idCat'];
        $idCat = CategoriaModel::editarCategoria($idCat);
        return $idCat;
    }
    public function actualizar(){
        if( !empty($_POST['descripcionCat'])){
            $datos = array(
                "idCat" => $_POST['idCat'],
                "descripcionCat" => $_POST['descripcionCat'],
            );
            $respuesta = CategoriaModel::actualizarCategoria($datos);

            if($respuesta){ header("Location:index.php?action=CategoriaMostrar");
                //echo '<script>window.location.href = "index.php?action=CategoriaEditar&idCat='.$datos['idCat'].'";</script>';
            }
        }
    }
    public function borrar(){
        if(!empty($_GET['idCat'])){
            $descripcionCat = CategoriaModel::borrarCategoria($_GET['idCat']);
            return $descripcionCat;
        }
    }
    public function confirmarBorrar(){
        if(!empty($_POST['idCat'])){
            $descripcionCat = CategoriaModel::borrarConfirmadoCategoria($_POST['idCat']);
            if($descripcionCat){
                echo '<script>window.location.href = "index.php?action=CategoriaMostrar";</script>';
            }
        }
    }

}




?>