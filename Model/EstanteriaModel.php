<?php 

namespace Model;

use Model\ConexionModel;

class EstanteriaModel{

    public static function guardarEstanteria($datos){
        try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO estanteria(ubicacion) VALUES (:ubi)");
            $stmt->bindParam(":ubi", $datos['ubicacion'], \PDO::PARAM_STR);
            return $stmt->execute() ? true : false;
        }catch( \Throwable $th){
            return false;
        }
    }
    Public static function mostrarEstanteria(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estanteria");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function editarEstanteria($idEst){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estanteria WHERE idEst = :id");
        $stmt->bindParam(':id', $idEst, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }
    public static function actualizarEstanteria($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE estanteria SET ubicacion = :ubi WHERE idEst = :id");
        $stmt->bindParam(':ubi',$datos['ubicacion'], \PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['idEst'], \PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public static function borrarEstanteria($idEst){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM estanteria where idEst = :id");
        $stmt->bindParam(':id',$idEst,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }
    public static function borrarConfirmadoEstanteria($idEst){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM estanteria where idEst = :id");
        $stmt->bindParam(':id',$idEst,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }
}

?>