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
print_r($tecnologias);
?>
