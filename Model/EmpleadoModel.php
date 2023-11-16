<?php 

namespace Model;

use Model\ConexionModel;

class EmpleadoModel{

    public static function guardarEmpleado($datos){
        try{
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO empleado (nombre, apellido,telefono,direccion,dpi,rol,fkEstado)
             VALUES (:nom, :ape, :tel, :direc, :dpi, :rol, :fkEst)");
            $stmt->bindParam(":nom", $datos['nombre'], \PDO::PARAM_STR);
            $stmt->bindParam(":ape" , $datos['apellido'], \PDO::PARAM_STR);
            $stmt->bindParam(":tel", $datos['telefono'], \PDO::PARAM_STR);
            $stmt->bindParam(":direc" , $datos['direccion'], \PDO::PARAM_STR);
            $stmt->bindParam(":dpi", $datos['dpi'], \PDO::PARAM_STR);
            $stmt->bindParam(":rol" , $datos['rol'], \PDO::PARAM_STR);
            $stmt->bindParam(":fkEst",$datos['fkEstado'], \PDO::PARAM_INT);
          

            return $stmt->execute() ? true : false;
        }catch( \Throwable $th){
            //echo "Mensaje de Error: " . $th->getMessage(); 
           return false;
        }
    }
    Public static function mostrarEmpleado(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM empleado");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public static function editarEmpleado($idEmp){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM empleado WHERE idEmp = :id");
        $stmt->bindParam(':id', $idEmp, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }
    public static function actualizarEmpleado($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE empleado SET nombre = :nom, apellido = :ape, telefono = :tel, direccion = :direc, dpi = :dpi, rol = :rol, fkEstado = :fkEst WHERE idEmp = :id");
        $stmt->bindParam(":nom",$datos['nombre'], \PDO::PARAM_STR);
        $stmt->bindParam(":ape",$datos['apellido'], \PDO::PARAM_STR);
        $stmt->bindParam(":tel",$datos['telefono'], \PDO::PARAM_STR);
        $stmt->bindParam(":direc",$datos['direccion'], \PDO::PARAM_STR);
        $stmt->bindParam(":dpi",$datos['dpi'], \PDO::PARAM_STR);
        $stmt->bindParam(":rol",$datos['rol'], \PDO::PARAM_STR);
        $stmt->bindParam(":fkEst",$datos['fkEstado'], \PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['idEmp'], \PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
    }
    public static function borrarEmpleado($idEmp){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM empleado where idEmp = :id");
        $stmt->bindParam(':id',$idEmp,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();//1 reg. Fetch
    }
    public static function borrarConfirmadoEmpleado($idEmp){
        $stmt = ConexionModel::conectar()->prepare("DELETE FROM empleado where idEmp = :id");
        $stmt->bindParam(':id',$idEmp,\PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
    }
}

?>