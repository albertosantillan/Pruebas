<?php
require('functions/connection.php');
$errors = [];
$flag = 0;
if(isset($_GET['id'])){
     $mi_id = $mysqli->real_escape_string($_GET['id']);
     if(!empty($mi_id)){
          $sql = "SELECT * FROM comentarios WHERE id='$mi_id'";
          $result = $mysqli->query($sql);
          if($result->num_rows > 0){
//Si hay registros activamos la bandera y listamos los datos
              $flag = 1;
              $datos = $result->fetch_assoc();
          }else {
               $errors[] ="No hay ningun comentario con ese id";
          }
     }else {
          $errors[] = "El id esta vacio";
     }
}else{
     $errors[] = "No estas enviando ningún id";
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
              <h2>Editar comentario</h2>
              <?php
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
               if($flag == 1){
?>
              <div class="formulario">
                   <form action="modifica.php" method = "POST">
                        <label for="">Nombre</label>
                        <input type="text" name="miNombre" value="<?php echo $datos ['nombre'] ?>">
                        <label for="">Calificación</label>
                        1
                        <input type="radio" name="miCalificacion" value="1"<?php if($datos['calificacion']==1){
                             echo "checked";
                             }?>>
                        2
                        <input type="radio" name="miCalificacion" value="2"<?php if($datos['calificacion']==2){
                             echo "checked";
                             }?>>
                        3
                        <input type="radio" name="miCalificacion" value="3"<?php if($datos['calificacion']==3){
                             echo "checked";
                             }?>>
                        4
                        <input type="radio" name="miCalificacion" value="4"<?php if($datos['calificacion']==4){
                             echo "checked";
                             }?>>
                        5
                        <input type="radio" name="miCalificacion" value="5"<?php if($datos['calificacion']==5){
                             echo "checked";
                             }?>>
                        <label for="">Comentario</label>
                        <textarea name="miComentario" id="" cols="30" rows="10"><?php echo $datos ['comentario'] ?> </textarea>
                        <input type="hidden" name="miId" value="<?php echo $datos['id']; ?>">
                        <input type="submit" value="Enviar" name="enviar">
                   </form>
              </div>
<?php
               }
?>
<a href="index.php">Regresar a la página de inicio</a>
          

          </div>
     </div>
     <div class="btn-add">
          <a href="insertar.php"><i class="fas fa-plus-circle"></i></a>
     </div>
      
</body>
</html>
