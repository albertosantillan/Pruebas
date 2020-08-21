<?php
session_start();
if(!isset($_SESSION['usuario'])){
     if(isset($_POST['enviar'])){
          $usuario=$_POST['user'];
          $_SESSION['usuario']=$usuario;
          echo "Iniciaste sesión como: ".$_SESSION['usuario']."<br>";
     }else{
          echo "No se envió el usuario";
     }
}else{
     // Si No existe la sesión
     echo "Estas logueado como ".$_SESSION['usuario'];
     echo "<br>";
     echo "¿Quieres cerrar sesión?";
     echo "<br>";
     echo "<a href='logout.php'> Click aqui para cerrar sesión </a>";
     echo "<br>";
}
?>
<a href="usuario.php">Regresar al formulario</a>