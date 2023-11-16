<?php 
namespace Model;

use Model\ConexionModel;

class EstadoModel{
    public static function guardarEstado($datos){
        try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO estado(estado) 
            VALUES (:est)");
            $stmt->bindParam(':est',$datos['estado'], \PDO::PARAM_STR);

            return $stmt->execute() ? true : false;
        }catch( \Throwable $th){
            return false;
        }
    }
    public static function mostrarEstado(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estado");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function editarEstado($idEstado){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estado WHERE idEstado = :id");
        $stmt->bindParam(':id',$idEstado, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function actualizarEstado($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE estado SET estado = :est WHERE idEstado = :id");
        $stmt->bindParam(':est',$datos['estado'], \PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['idEstado'], \PDO::PARAM_INT);
        $stmt->execute() ? true : false;
    }
    public static function borrarEstado($idEstado){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estado where idEstado = :id");
        $stmt->bindParam(':id',$idEstado,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }
    public static function borrarConfirmadoEstado($idEstado){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM estado where idEstado = :id");
        $stmt->bindParam(':id',$idEstado,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }

}


?>