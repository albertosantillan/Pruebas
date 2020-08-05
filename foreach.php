<?php
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
 foreach($persona ['datos'] as $person):
 echo $person;
endforeach;

?>