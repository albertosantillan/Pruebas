<html>
<link rel="stylesheet" href='https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/darkly/bootstrap.min.css'>
<?php
$persona = array(
    'datos' => array(
      'nombre' => 'Martin',
      'pais' => 'Mexico',
      'profesion' => 'Ing. industrial',
      'status' => 'inactivoo'
    ),
    'Lenguajes' => [
      'front_end' => array('css','html','javascript','scss'),
      'Back_end' => array('PHP','mysql','python')  
    ]
    
  );
  echo $persona['datos']['pais'].'<br>';
switch ($persona['datos']['status']) {
  case 'activo':
    $tag_status = 'bg-warning';
    break;
    case 'inactivo':
      $tag_status = 'bg-danger';
      break;
  default:
  $tag_status = 'bg-primary';
    break;
}

echo '<ul class="list-group w-25 m-4">';
 foreach($persona ['datos'] as $key => $person):
  echo "<li class='list-group-item $tag_status'>$key - $person</li>";
  endforeach;
echo '</ul> <br>';
$total_lenguajes = count($persona['Lenguajes']['front_end']);
echo "<div class='card'> total de lenguajes $total_lenguajes</div>";
echo '<select class="m-4 custom-select w-25">';
foreach ($persona['Lenguajes'] ['front_end'] as $key => $value) {
  echo "<option> $value </option>";
}
echo '</select><br>'; 
echo '<button class="m-4 btn btn-info btn-sm btn-block w-25"> continuar </button>';
?>
<html> 