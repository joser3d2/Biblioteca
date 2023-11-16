<?php 

namespace Model;

use Model\ConexionModel;

class CategoriaModel{

    public static function guardarCategoria($datos){
        try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO categorialibro (descripcionCat) 
            VALUES (:descr)");
            $stmt->bindParam(":descr", $datos['descripcionCat'], \PDO::PARAM_STR);
            
            return $stmt->execute() ? true : false;
        }catch( \Throwable $th){
            return false;
        } 
    }
    public static function mostrarCategoria(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM categorialibro");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function editarCategoria($idCat){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM categorialibro where idCat = :id");
        $stmt->bindParam(':id',$idCat,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
   public static function actualizarCategoria($datos){
        try{
                $stmt = ConexionModel::conectar()->prepare("UPDATE categorialibro SET descripcionCat = :descr where idCat = :id");
                $stmt->bindParam(':descr',$datos['descripcionCat'], \PDO::PARAM_STR);
                $stmt->bindParam(':id',$datos['idCat'], \PDO::PARAM_INT);
                $stmt->execute() ? true : false;
        }catch( \Throwable $th ){
                echo $th;
             }
   }

    public static function borrarCategoria($idCat){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM categorialibro where idCat = :id");
        $stmt->bindParam(':id',$idCat,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }
    public static function borrarConfirmadocategoria($idCat){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM categorialibro where idCat = :id");
        $stmt->bindParam(':id',$idCat,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }
}
?>