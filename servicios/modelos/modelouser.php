<?php 
include 'conexion.php';

class UsuarioModelo{
    private $id;
    private $nombre;
    private $apellido;
    private $celular;


    function insertarusuario($nombre, $apellido, $celular){
        $objBaseDatos= new Conexion();
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->celular = $celular;
        $res=$objBaseDatos->prepare("call pa_persona('','$this->nombre','$this->apellido','$this->celular','nuevo')");
        $res->execute();
        return $res;
        $res->closeCursor(); 
        $res = null; 
        $objBaseDatos=null;

    }

    function ingresousuario($nombre){
        $objBaseDatos = new Conexion();
        $this->nombre = $nombre;
        $res=$objBaseDatos->prepare("call pa_persona('','$this->nombre','','','login')");
        $res->execute();
        return $res;
        $res->closeCursor(); 
        $res = null; 
        $objBaseDatos=null;
    }

}


?>