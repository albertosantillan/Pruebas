<?php 
//Llamado a la conexión
require('connection.php');
$mi_nombre = 'Francisco';
$mi_usuario = 'Fran99';
$mi_password ='99fr';

$sql = "INSERT INTO usuarios(id,nombre,usuario,password) VALUES(NULL,'$mi_nombre','$mi_usuario','$mi_password')";

$resultado = $mysqli->query($sql);
if($resultado){
     echo "usuario se insertó correctamente";
}else{
     echo "Hubo un error al insertar el usuario".$mysqli->error;
}


?>