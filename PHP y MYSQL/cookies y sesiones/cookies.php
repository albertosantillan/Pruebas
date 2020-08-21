<?php
//Para crear una cookie se utiliza la función setcookie
//setcookie("nombre","valor","fecha_expiracion");
//La función time() + tiempo de expiración en seg.
if(!isset($_COOKIE['apellido'])){
     setcookie('apellido','Paredes', time() + 60 * 5);
}else{
     //Si la cookie existe
     echo "Hola señor ".$_COOKIE['apellido'];
}
//setcookie('apellido','Paredes', time() -1)

?>