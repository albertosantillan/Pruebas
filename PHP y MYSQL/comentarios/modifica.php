<?php
require('functions/connection.php');
$errors = [];
if(isset($_POST['enviar'])){
     $mi_nombre = $mysqli->real_escape_string($_POST['miNombre']);
     $mi_calificacion = $mysqli->real_escape_string($_POST['miCalificacion']);
     $mi_comentario = $mysqli->real_escape_string($_POST['miComentario']);
     $mi_id = $mysqli->real_escape_string($_POST['miId']);
     if(!empty($mi_nombre) && !empty($mi_calificacion) && !empty($mi_comentario) && !empty($mi_id)){
          $mi_fecha = date("Y-m-d H:i:s");
          $sql = "UPDATE comentarios SET nombre = '$mi_nombre', comentario ='$mi_comentario', calificacion ='$mi_calificacion' WHERE id ='$mi_id'";
          $result = $mysqli->query($sql);
     }else{
          $errors[] = "Registra todos los campos";
     }
}else {
     $errors[] = "No has enviado el formulario";
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
              <h2>Estado de la modificación</h2>
              
                   <?php
//Si se ejecuta query, la variable $result existe.
                   if(isset($result)){
//Si $result existe revisar que envíe true
                       if($result){
//Si las filas afectadas fueron > 0
                            if($mysqli->affected_rows > 0){
                                 echo "<div class='success'><i class='fas fa-check-circle'></i> comentario modificado correctamente </div>";
                            }else {
                                 $errors[] = "No se modificó ningún comentario";
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
     <div class="btn-add">
          <a href="insertar.php"><i class="fas fa-plus-circle"></i></a>
     </div>
      
</body>
</html>