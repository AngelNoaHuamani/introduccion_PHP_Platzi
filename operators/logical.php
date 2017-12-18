<?php 

//variables
$v1 = 1;
$v2 = 1;

$v3 = 2;
$v4 = 3;

//logica
$result1 = $v1 == $v2;
echo 'Resultado Uno: <br>';
var_dump($result1);

echo '<br>';

$result2 = $v3 == $v4;
echo 'Resultado Dos: <br>';
var_dump($result2);

echo '<br><br>';

$result3 = $result1 && $result2;
echo 'Resultado Final (&&): <br>';
var_dump($result3);

echo '<br><br>';

$result4 = $result1 || $result2;
echo 'Resultado Final (||): <br>';
var_dump($result4);


 ?>