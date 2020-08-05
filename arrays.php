<?php 
//Mostrar posición ubicación y tipo de datos 
$tecnologias = ['css','html','java','php'];
var_dump($tecnologias);
echo "<br>";
//Insertar valores al final del arreglo
array_push($tecnologias, 'python');
var_dump($tecnologias);
echo "<br>";
array_push($tecnologias,'ts','c++');
var_dump($tecnologias);
echo "<br>";
//Editar la posición #3 del arreglo
$tecnologias[3] = 'typescript';
//Quita los valores de las 2 primeras posiciones
$tecnologias = array_slice($tecnologias,2);
echo "<br>";
//combina 2 arreglos
$nuevastecnologias = ['API','TOKEN'];
$combinado = array_merge($tecnologias,$nuevastecnologias);
var_dump($combinado);
echo "<br>";
//Devuelve la posición del valor buscado
$encontrado = array_search('API',$combinado);
var_dump($encontrado);
echo "<br>";

$combinado = array_filter($combinado,function($tecnologia, $key) use ($encontrado) {
    return $key === $encontrado;
},ARRAY_FILTER_USE_BOTH);

foreach ($combinado as $key => $lalo) {
    echo $lalo . "-" . random_int(10, 100) . "X <br>";
}
echo "<br>";
//suma los valores de un arreglo
$cantidades = [4,6,3,2,1];
$total = array_sum($cantidades);
var_dump($total);
//Array asociativo, muestra el valor 2 de front_end de lenguajes
$persona = array(
    'datos' => array(
      'nombre' => 'Martin',
      'pais' => 'Mexico',
      'profesion' => 'Ing. industrial'
    ),
    'Lenguajes' => array(
      'front_end' => array('css','html','javascript'),
      'Back_end' => array('PHP','mysql','python')  
        )
  );
  print_r($persona['Lenguajes']['front_end'][2]);
?>
<?php
// imprimir valor según la posición mostrada
$tecnologias = ['CSS','HTML','Javascript','Jquery'];
echo $tecnologias[0];
echo $tecnologias[1];
echo $tecnologias[2];
echo $tecnologias[3];
?> <br>
<?php
//imprimir valores con su posición
print_r($tecnologias);
?><br>
<?php 
//Agregar valor al arreglo
$tecnologias[]='Python'
?><br>
<?php
print_r($tecnologias);
?>
<?php 
//Borrar ultimo elemento y traerlo en una variable
$python=array_pop($tecnologias);
?>
<h1><?php echo $python;?></h1>
<?php
print_r($tecnologias);
?><br>    
<?php
//Remover elemento deacuerdo a  su posición
unset ($tecnologias[0]);
print_r($tecnologias);
?><br>
<?php 
//Remover 1er valor de arreglo y asignarlo a una variable
$html = array_shift($tecnologias);
?>
<h1><?php echo $html; ?></h1>
<?php
//Revisar si un valor existe en un arreglo
$existe = in_array('Jquery', $tecnologias);
var_dump ($existe)
?>