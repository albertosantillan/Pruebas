<?php
/*Variables; concatenando strings y variables
*/
echo "<h2>Boleanas</h2>";

$booleana = TRUE;
$booleanaFalsa = FALSE;
echo "Variable booleana verdadera".$booleana."<br>"; 
echo "Variable booleana falsa".$booleanaFalsa;

echo "<h3>Variables enteras</h3>";
$integer = 54;
$integer2 = 62587;
$intNeg = -54;
$binaria = 0b0011;
echo "variable entera 1 = ".$integer."<br>";
echo "variable entera 2 = ".$integer2."<br>";
echo "variable negativa = ".$intNeg."<br>";
echo "variable binaria = ".$binaria."<br>";

echo "<h2>Variables flotantes</h2>";
$float = 36.22;
$floatNeg = -222.65642;
echo "variable flotante o deecimal =".$float."<br>";
echo "variable flotante negativa =".$floatNeg."<br>";

echo "<h3>variables string o cadenas</h3>";
$cadena = "Soy una cadena o un texto";
$variableCadena = "25 personas estan bien<br>";
echo "string: ".$cadena."<br>";
echo $variableCadena;

$nombre = "Martin";
$Nombre = "Alberto";

echo "Variable con minúscula: ".$nombre.",Variable con mayúscula: ".$Nombre."<br>";
/*Comillas simples y dobles*/
echo "Me llamo $nombre<br>";
echo 'Me llamo $nombre<br>';
echo 'Me llamo'.$Nombre."<br>";

echo "<h3>Variables por referencia</h3>";
$variableOriginal = "Soy la original";
$segundaVariable = &$variableOriginal;
echo "Original: ".$variableOriginal."<br>";
echo "Segunda variable: ".$segundaVariable."<br>";
$variableOriginal = "Cambié la original";
echo "Original: ".$variableOriginal."<br>";
echo "Segunda variable: ".$segundaVariable."<br>";
$segundaVariable = "Cambié la segunda";
echo "Original: ".$variableOriginal."<br>";
echo "Segunda variable: ".$segundaVariable."<br>";
echo "<h2>Variables variables</h2>";
$variable1 = "computadora";
$$variable1 = 8;
echo 'Esta es la variable $computadora: '.$computadora."<br>";
echo 'Esta es la variable $variable1 '.$variable1."<br>";
echo 'Esta es la variable $$variable1'.$$variable1."<br>";
/*Constantes*/
echo "<h1>Constantes</h1>";
define('PI',3.14159);
echo PI;


?>
