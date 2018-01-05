<?php 

//variable global
$x = 5;
$numbers = [1, 2, 3, 4, 5];

//funcion anonima
$closure = function ($n) use ($x){
	return $n * $x;
};

$result = array_map($closure , $numbers);
var_dump($result);

?>