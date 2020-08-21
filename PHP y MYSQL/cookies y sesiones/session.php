<?php
session_start();
//$_SESSION['nombre de la sesion']= "valor de la sesion;
$_SESSION['usuario']="Martin";
$_SESSION['contrasena']="nomerobes";
$_SESSION['edad']=20;
session_destroy();




?>