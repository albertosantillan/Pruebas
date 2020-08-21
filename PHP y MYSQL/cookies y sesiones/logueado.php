<?php
session_start();
if(!isset($_SESSION['usuario'])){
     //Si no existe la sesión de usuario
     header("location:usuario.php");
}
?>
<h2>Estas viendo esta página por que estas logueado</h2>
<a href="logout.php">Cerrar sesión</a>