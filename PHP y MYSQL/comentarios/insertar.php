<?php
require('functions/connection.php');
$errors =[];
if(isset($_POST['enviar'])){
//Si existe el elemento enviar en POST
$mi_nombre = $mysqli->real_escape_string($_POST['miNombre']);
$mi_calificacion = $mysqli->real_escape_string($_POST['miCalificacion']);
$mi_comentario =$mysqli->real_escape_string($_POST['miComentario']);

//var_dump($_POST);
if(!empty($mi_nombre)&& !empty($mi_calificacion) && !empty($mi_comentario)){
     //No esta vacía ninguna variable
     $mi_fecha = date('Y-m-d H:i:s');
     $sql = "INSERT INTO comentarios (id,nombre,comentario,fecha,calificacion) VALUES(NULL,'$mi_nombre','$mi_comentario','$mi_fecha','$mi_calificacion')";
     $result = $mysqli->query($sql);
}else{
     $errors[]= "Debes registrar todos los campos";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Insertar comentario</title>
     <link rel="stylesheet" href="css/estilos.css">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
     <div class="container">
          <div class="comentarios">
              <h2>Sistema de comentarios</h2>
              <?php
              if(isset($result)){
                   if($result){
                    echo "<div class='success'><i class='fas fa-check-circle'></i> comentario Agregado correctamente </div>";
                   }else{
                        $errors[] = "Sucedió un error";
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

              <div class="formulario">
                   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
                        <label for="">Nombre</label>
                        <input type="text" name="miNombre">
                        <label for="">Calificación</label>
                        1
                        <input type="radio" name="miCalificacion" value="1">
                        2
                        <input type="radio" name="miCalificacion" value="2">
                        3
                        <input type="radio" name="miCalificacion" value="3">
                        4
                        <input type="radio" name="miCalificacion" value="4">
                        5
                        <input type="radio" name="miCalificacion" value="5" checked>
                        <label for="">Comentario</label>
                        <textarea name="miComentario" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="Enviar" name="enviar">

                   </form>
              </div>

<a href="index.php">Regresar a la página de inicio</a>
          

          </div>
     </div>
     <div class="btn-add">
          <a href="insertar.php"><i class="fas fa-plus-circle"></i></a>
     </div>
      
</body>
</html>