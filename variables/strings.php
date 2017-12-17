<?php 

$intVar = 9;

//'comillas simples' el texto aparecera tal cual del lado del cliente
$stringVar1 = 'Hola $intVar';
echo $stringVar1;

echo "<br>";

//"comillas dobles" PHP evalua la existencia de variables
$stringVar2 = "Hola $intVar";
echo $stringVar2;

echo "<br>";

//PHP es dinamicamente tipado
$newVar = 10;
$newVar = 'String';
echo $newVar;

echo "<br>";

//PHP concatenacion (Cast)
$intVar = 11;
$stringVar3 = "Hola".$intVar;
echo $stringVar3;


 ?>
