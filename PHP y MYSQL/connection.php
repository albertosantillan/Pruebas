<?php
$mysqli = new mysqli("localhost", "root","root","curso");
//echo "<pre>";
//var_dump($mysqli);
//echo "</pre>";
if($mysqli->connect_errno){
     echo "fallo al conectar, número de error;".$mysqli->connect_errno."<br>Descripción del error: ".$mysqli->connect_error;
/*Estos errores no se deben mostrar al usuario, le sirven al programador*/
}/*else{ 
     echo 'Conexión exitosa';
}*/

?>