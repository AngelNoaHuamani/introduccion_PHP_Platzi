<?php 

//arreglos
	$array1 = [
		0 => 'a',
		1 => 'b',
		2 => 'c'
	];

	$array2 = [
		3 => 'd',
		4 => 'e'
	];

	$array3 = ['a','b','e'];


//comparacion de arreglos
	$result = $array1 + $array2;
	var_dump($result);

	echo "<br>"; //* Esto es un salto de linea

//comparacion de arreglos
	$result = $array1 == $array3;
	var_dump($result);


 ?>