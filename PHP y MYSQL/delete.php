<?php
require('connection.php');
$mi_id = 3;
$sql = "DELETE FROM usuarios WHERE id = '$mi_id'";
$resultado = $mysqli->query($sql);
//Si resultado es igual a true, se ejecutó correctamente
if($resultado){
    if($mysqli->affected_rows >0){
     echo "Usuario eliminado";
    } else{
     echo "Ese usuario no existe";    
    }
     //Se verifica si una fila fue afectada
     
}else{
     echo "Hubo un error".$mysqli->error;

}


?>