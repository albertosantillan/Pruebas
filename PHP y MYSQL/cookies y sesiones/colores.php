<?php
$fondo= "#fff";
if(isset($_POST['enviar'])){
     $color = $_POST['colorfav'];
     if($color=="verde"){
          setcookie('color','verde',time()+60*60*24*30);
     }elseif($color =="azul"){
          setcookie('color','azul',time()+60*60*24*30);
     }
}
if(isset($_COOKIE['color'])){
     //si existe la cookie 
     if($_COOKIE['color']=="verde"){
          $fondo = "#33ca7f";
     }elseif($_COOKIE['color'] == "azul"){
          $fondo = "#90bede";
     }

     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Colores</title>
</head>
<?php echo "<body style=\"background: ".$fondo.";\" >";?>
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
     Elige tu color favorito para el fondo:
     Verde:
     <input type="radio" name="colorfav" value="verde">
     Azul
     <input type="radio" name="colorfav" value="azul">
     <input type="submit" value ="Enviar" name="enviar">
     </form>

</html>