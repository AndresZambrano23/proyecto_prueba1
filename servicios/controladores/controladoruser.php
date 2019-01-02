<?php 
include '../modelos/modelouser.php';

class UsuarioControlador{
    function ingresar($nombre,$apellido,$celular){
        $objModelo=new usuarioModelo();
        $res=$objModelo->insertarusuario($nombre,$apellido,$celular);  
    }

    function ingreso($nombre){
        $objModelo= new usuarioModelo();
        $res=$objModelo->ingresousuario($nombre);
        $datos=$res->fetchAll();
        foreach ($res as $row) {
        $datos[]=$row;
        }
        echo(json_encode($datos)); 
    }
}




?>