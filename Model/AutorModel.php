<?php 

namespace Model;

use Model\ConexionModel;

class AutorModel{

    public static function guardarAutor($datos){
        try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO autor(nombre, apellido) VALUES (:nom, :ape)");
            $stmt->bindParam(":nom", $datos['nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(":ape" , $datos['apellido'], \PDO::PARAM_STR);

            return $stmt->execute() ? true : false;
        }catch( \Throwable $th){
            return false;
        }
    }
    Public static function mostrarAutor(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autor");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function editarAutor($idautor){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autor WHERE idautor = :id");
        $stmt->bindParam(':id', $idautor, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }
    public static function actualizarAutor($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE autor SET nombre = :nom, apellido = :ape WHERE idautor = :id");
        $stmt->bindParam(':nom',$datos['nombre'], \PDO::PARAM_STR);
        $stmt->bindParam(':ape',$datos['apellido'], \PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['idautor'], \PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public static function borrarAutor($idautor){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM autor where idautor = :id");
        $stmt->bindParam(':id',$idautor,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }
    public static function borrarConfirmadoAutor($idautor){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM autor where idautor = :id");
        $stmt->bindParam(':id',$idautor,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }
}

?>