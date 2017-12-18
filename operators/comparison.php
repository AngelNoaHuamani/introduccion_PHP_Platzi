<?php 

//variables
 	$v1 = 10;
 	$v2 = '10';

//comparacion parcial (PHP internamente convierte la cadena a numeral)
 	$result = $v1 == $v2;
 	var_dump($result);

 	echo "<br>"; //* Esto es un salto de linea

 	$result = $v1 != $v2;
 	var_dump($result);

 	echo "<br>"; //* Esto es un salto de linea

 //comparacion exacta (PHP busca tanto el valor como el tipo de dato exactamente)
 	$result = $v1 === $v2;
 	var_dump($result);

 	echo "<br>"; //* Esto es un salto de linea

 	$result = $v1 !== $v2;
 	var_dump($result);

 	echo "<br>"; //* Esto es un salto de linea

//Operador Spaceship<=>
 	$result = $v1 <=> $v2;
 	var_dump($result);
 ?>