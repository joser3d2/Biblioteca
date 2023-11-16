<?php  

namespace Controller;

use Model\AutorModel;

class AutorController{

    public function Cautor(){

        if(!empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $datos = array(
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido']
            );
            $respuesta = AutorModel::guardarAutor($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public function mostrar(){
        $nombre = AutorModel::mostrarAutor();
        return $nombre;
    }
    public function editar(){
        $idautor = $_GET['idautor'];
        $idautor = AutorModel::editarAutor($idautor);
        return $idautor;
    }
    public function actualizar(){
        if( !empty($_POST['nombre']) && !empty($_POST['apellido'])){
            $datos = array(
                "idautor" => $_POST['idautor'],
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido']
            );
            $respuesta = AutorModel::actualizarAutor($datos);

            if($respuesta){
                echo '<script>window.location.href = "index.php?action=autorMostrar";</script>';
            }
        }
    }
    public function borrar(){
        if(!empty($_GET['idautor'])){
            $nombre = AutorModel::borrarAutor($_GET['idautor']);
            return $nombre;
        }
    }
    public function confirmarBorrar(){
        if(!empty($_POST['idautor'])){
            $nombre = AutorModel::borrarConfirmadoAutor($_POST['idautor']);
            if($nombre){
                echo '<script>window.location.href = "index.php?action=autorMostrar";</script>';
            }
        }
    }

}




?>