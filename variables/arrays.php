<?php 

//Php solo usa relaciones entre llaves y valores, por eso no importa que exista un orden específico.

$arrayVar = [
	'color1' => 'red',
	'color2' => 'blue',
	3 => 'black'
];


//De esta manera podemos imprimir el valor que corresponde a la cadena o el número que hemos definido como la llave de el arreglo individual.

var_dump($arrayVar[color2]);

?>