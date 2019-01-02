<?php 
include '../controladores/controladoruser.php';
if(isset($_REQUEST['nombre']) && !empty($_REQUEST['nombre'])){

    $nombre=$_REQUEST['nombre'];
    $objLogin=new UsuarioControlador();
    $objLogin->ingreso($nombre);
    echo " Bienvenido";
}else{
    echo "Por favor registre todos los campos completos";
}



?>