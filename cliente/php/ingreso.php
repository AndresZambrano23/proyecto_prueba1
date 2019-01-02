<?php 
require('./head.php');
$head= head();
print_r($head);
if (!isset($_SESSION)) {
    session_start();
}
$n=$_REQUEST['nombre'];
function sendGet($nombre){

            //datos a enviar
            //$data = array("nombre" => "$nombre");
            //url contra la que atacamos
            $ch = curl_init("http://localhost/practicas/proyecto%201/servicios/vistas/ingresouser.php?nombre=$nombre");
            //a true, obtendremos una respuesta de la url, en otro caso, 
            //true si es correcto, false si no lo es
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //establecemos el verbo http que queremos utilizar para la petición
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            //enviamos el array data
            //curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            //obtenemos la respuesta
            $response = curl_exec($ch);
            // Se cierra el recurso CURL y se liberan los recursos del sistema
            curl_close($ch);
            if(!$response) {
                return false;
                echo '<script>
                        alert("El usuario no existe intente de nuevo");
                        </script>';
            }else{
                //var_dump(json_decode($response));
                //var_dump($response);
                $datos = json_decode($response, true);
                echo $datos;
                //$_SESSION['usuario'] = $nombre;
                /*echo '<script>  alert("Bienvenido");
                window.location="menu.php";
               </script>';*/
               /*foreach($datos as $datos_usuario){
                   echo $datos_usuario[0];
               }*/
               for($i = 0; $i <= $datos; $i++){
                   echo $i[0];
               }
            }

        }
sendGet($n);




?>