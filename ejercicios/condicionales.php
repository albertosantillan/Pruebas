<?php
//Validando # caracteres contraseña
$contrasena = "12345678";
$total_letras = strlen($contrasena);
if ($total_letras !== 8) {
     echo "Tu contraseña debe ser de 8 caracteres";
}
else {
     echo "Tu contraseña se creó correctamente";
}
//Imprimiendo #s 1 al 20
for ($f = 1; $f <= 20; $f++) {
  echo $f;
  echo "<br>";
}
//Imprimiento aleatorios 1 al 20, iniciando en 1
$valor = rand(1, 20);
$inicio = 1;
while ($inicio <= $valor) {
  echo $inicio;
  echo "<br>";
  $inicio++;
}

  //Números de los días del 1 a la fecha actual;
  $dia = date("d");
  $inicio = 1;
  while ($inicio < $dia) {
    echo $inicio . "<br>";
    $inicio++;
  }
/*Hacer tablas de multiplicar*/
for ($i = 1; $i <= 10; $i++){
  
  for ($j = 1; $j <= 10; $j++){
    echo "$i X $j = ".($i * $j);
    echo "<br>";

  }
}

$asterisco = '*';
for ( $a = 1; $a <= 10; $a++ ){
  for ( $b = 1; $b<= $a; $b++ ){
    echo $asterisco;

  }
echo "<br>";  
}



?>