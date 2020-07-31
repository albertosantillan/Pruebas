<?php 
$tecnologias = ['css','html','java','php'];
var_dump($tecnologias);
echo "<br>";
array_push($tecnologias, 'python');
var_dump($tecnologias);
echo "<br>";
array_push($tecnologias,'ts','c++');
var_dump($tecnologias);
$tecnologias[3] = 'typescript';
$tecnologias = array_slice($tecnologias,2);

echo "<br>";
$nuevastecnologias = ['API','TOKEN'];
$combinado = array_merge($tecnologias,$nuevastecnologias);
var_dump($combinado);

echo "<br>";
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
$cantidades = [4,6,3,2,1];
$total = array_sum($cantidades);
var_dump($total);


?>