<?php 
include '../controladores/controladoruser.php';
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
	isset($_POST['apellido']) && !empty($_POST['apellido']) &&
	isset($_POST['celular']) && !empty($_POST['celular'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $celular=$_POST['celular'];
    $objLogin=new UsuarioControlador();
    $objLogin->ingresar($nombre,$apellido,$celular);
    echo "dato insertado con exito";
}else{
    echo "Por favor registre todos los campos completos";
}

?>