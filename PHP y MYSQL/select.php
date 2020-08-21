<?php 
//Llamar a archivo de conexión
require('connection.php');
//En una variable vamos a almacenar el QUERY, que es la consulta a la bd
$sql = "SELECT * FROM usuarios";
//Ejecutamos el query, y lo guardamos en una variable
$resultado = $mysqli->query($sql);
echo "<pre>";
var_dump($resultado);
echo "</pre>";
if($resultado->num_rows >0){
//Fetch_assoc arreglo asociativo cada fila de la base y la guarda en $fila
     while ($fila = $resultado->fetch_assoc()){
          echo "<pre>";
          var_dump($fila);
          echo "</pre>"; 
          echo $fila['id'];
          echo "<br>";
          echo $fila['usuario'];
          echo "<br>";
          echo $fila['password'];
          echo "<br>";
          echo $fila['nombre'];
          echo "<br>";
     }
}else{echo 'No hay usuarios';
}

?>