<?php
require('../connection.php');
$mi_id=3;
$mi_nombre = 'Carlos';
$mi_usuario = 'carl40';
$mi_password = '40carl';
$sql = "UPDATE usuarios SET nombre = '$mi_nombre', usuario = '$mi_usuario', password = '$mi_password' WHERE id = '$mi_id'";

$resultado = $mysqli->query($sql);
if($resultado){
     if($mysqli->affected_rows > 0){
          echo "Usuario modificado correctamente";
     }else{
          echo "Ese usuario no existe";
     }
}else{
     echo "Hubo un error en la actualización del usuario";
}
?>