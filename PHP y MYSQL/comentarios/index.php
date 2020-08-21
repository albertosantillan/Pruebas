<?php
require('functions/connection.php');
$errors = [];
$sql = "SELECT * FROM comentarios";
$resultado = $mysqli->query($sql);
//var_dump($resultado);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sistema de comentarios</title>
     <link rel="stylesheet" href="css/estilos.css">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
     <div class="container">
          <div class="comentarios">
              <h2>Sistema de comentarios</h2>
              <?php
              if($resultado){
//Se evalúa si el query se ejecutó correctamente
                   if($resultado->num_rows>0){
//Num_rows mayor a 0, significa que sí hay registros
                        while($comentario = $resultado->fetch_assoc()){
/*En variable $comentario se guarda el resultado de $resultado, y se asigna a los siguientes campos*/
/*En los siguientes campos se selecciona nombre,calificacion, fecha, comentario de $comentario*/
              ?>
              <div class="comentario">
                   <p><span>Autor: </span> <?php echo htmlspecialchars ($comentario['nombre']);?></p>
                   <p><span>Calificación: </span><?php echo htmlspecialchars ($comentario['calificacion']); ?></p>
                   <p><span>Fecha: </span> <?php echo htmlspecialchars ($comentario['fecha']);?></p>
                   <p><span>Comentario: </span> <?php echo htmlspecialchars ($comentario['comentario']);?></p>
                   <div class="acciones">
                        <a href="borrar.php?id=<?php echo htmlspecialchars ($comentario['id']);?>"><button class="borrar"><i class="fas fa-trash"></i> Borrar</button></a>
                        <a href="editar.php?id=<?php echo htmlspecialchars ($comentario['id']);?>"><button class="editar"><i class="fas fa-pen-square"></i> Editar</button></a>
                   </div>
              </div>
              <?php
                                   }                                
                              }else{
// Se ejecuta si num_rows es igual a cero
                                   $errors[] = "No hay ningún comentario";
                              }
//Se ejecuta si $resultado es FALSE
                         }else{
                              $errors[]= "Hubo un error en la consulta";
                         }
//Condicional si hay mas de 0 errores se imprime la clase de error
               if(count($errors) > 0){
                    echo "<div class='error'>";
//Variable $errors almacena cada elemento en la variable $error 
                    foreach($errors as $error){
//Se imprime el ícono ! con cada error, varios errores, los imprime todos
                         echo "<i class='fas fa-exclamation-circle'></i>".$error."<br>";
                    }
                    echo "</div>";
               }
?>
          </div>
     </div>
     <div class="btn-add">
          <a href="insertar.php"><i class="fas fa-plus-circle"></i></a>
     </div>
      
</body>
</html>