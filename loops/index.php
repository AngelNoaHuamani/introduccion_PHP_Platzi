<?php 

//Estructura de ciclo: for
echo "Estructuras de ciclo: for <br>";
for ($i=0; $i <= 10 ; $i++) { 
	echo $i . '<br>';
}

echo "<br>"; //* Esto es un salto de linea

//Estructura de ciclo: while
echo "Estructuras de ciclo: while <br>";
$j=1;
while ( $j <= 10) {
	echo $j . '<br>';
	$j++;
}

echo "<br>"; //* Esto es un salto de linea

//Estructura de ciclo: do-while
echo "Estructuras de ciclo: do-while <br>";
$k=11;
do {
	echo $k . '<br>';
	$k++;
} while ( $k <= 10);

echo "<br>"; //* Esto es un salto de linea

//Estructura de ciclo: foreach
echo "Estructuras de ciclo: foreach <br>";
$names = ['Alex', 'David', 'Angie'];
foreach ($names as $key => $name) {
	echo $key . ' - ' .$name . "<br>";
}

?>