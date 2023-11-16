<?php 

namespace Model;

class EnlacesModel{

    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio" => "View/inicio.php",
            "nosotros" => "View/nosotros.php",
            "contacto" => "View/contacto.php",
            "autor" => "View/Autor/autor.php",
            "autorEditar" => "View/Autor/AutorEditar.php",
            "autorEliminar" => "View/Autor/AutorEliminar.php",
            "autorMostrar" => "View/Autor/AutorMostrar.php",
            "Categoria" => "View/Categoria/Categoria.php",
            "CategoriaEditar" => "View/Categoria/CategoriaEditar.php",
            "CategoriaEliminar" => "View/Categoria/CategoriaEliminar.php",
            "CategoriaMostrar" => "View/Categoria/CategoriaMostrar.php",
            "estado" => "View/Estado/estado.php",
            "estadoEditar" => "View/Estado/estadoEditar.php",
            "estadoEliminar" => "View/Estado/estadoEliminar.php",
            "estadoMostrar" => "View/Estado/estadoMostrar.php",
            "Estanteria" => "View/Estanteria/Estanteria.php",
            "EstanteriaEditar" => "View/Estanteria/EstanteriaEditar.php",
            "EstanteriaEliminar" => "View/Estanteria/EstanteriaEliminar.php",
            "EstanteriaMostrar" => "View/Estanteria/EstanteriaMostrar.php",
            "Empleado" => "View/Empleado/Empleado.php",
            "EmpleadoEditar" => "View/Empleado/EmpleadoEditar.php",
            "EmpleadoEliminar" => "View/Empleado/EmpleadoEliminar.php",
            "EmpleadoMostrar" => "View/Empleado/EmpleadoMostrar.php",
            "Registro" => "View/Usuario/Registro.php",
            "Login" => "View/Usuario/Login.php",
            "Logout" => "View/Usuario/Logout.php",
            default => "View/error.php"
        };
        return $modulo;
    }
}
?>