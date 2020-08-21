<?php
require('functions/connection.php');
$errors =[];
if(isset($_GET['id'])){
//Verificamos que nos envíen id
//Se guarda el id enviado de index fila 37 en $idcomentario
$idcomentario = $mysqli->real_escape_string($_GET['id']);
if(empty($idcomentario)){
     $errors[] = "El id está vacío";
}else{
     $sql = "DELETE FROM comentarios WHERE id = $idcomentario";
     $result = $mysqli->query($sql);
}

}else{
     $errors[] ="No puedes estar en esta página";
}
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
              <h2>Borrar comentario</h2>
              <div class="comentario">
                   <?php
                   if(isset($result)){
//Si se ejecuta query, la variable $result existe.
//Si $result existe revisar que envíe true
                       if($result){
                            if($mysqli->affected_rows > 0){
                                 echo "<div class='success'><i class='fas fa-check-circle'></i> comentario borrado correctamente </div>";
                            }else {
                                 $errors[] = "Este comentario no existe";
                            }
                       }else {
                            $errors[] = "Error en la consulta";
                       }
                   }

                   ?>
<?php
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
               $mysqli->close();
?>
<a href="index.php">Regresar a la página de inicio</a>
               </div>

          </div>
     </div>
     <div class="btn-add">
          <a href="insertar.php"><i class="fas fa-plus-circle"></i></a>
     </div>
      
</body>
</html>