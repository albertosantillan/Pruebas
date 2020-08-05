<?php
$contrasena = "12345678";
$total_letras = strlen($contrasena);
if ($total_letras !== 8) {
     echo "Tu contraseña debe ser de 8 caracteres";
}
else {
     echo "Tu contraseña se creó correctamente";
}
?>