<?php
$mysqli = new mysqli("localhost","root","root","curso");

if($mysqli->connect_errno){
    // echo "fallo al conectar, número de error".$mysqli->connect_errno-"<br> Descripción del error".$mysqli->connect_error;
    echo "Algo salió mal, inténtalo de nuevo mas tarde";
}else {
    // echo "conexión exitosa";
}


?>