<?php 

$color = 'yellow';

	//Condicional if

	if ($color == 'black') {
		echo 'Color es black';
	} else if ($color == 'white'){
		echo 'Color is white';
	} else {
		echo 'Color...';
	}

		echo "<br>"; //* Esto es un salto de linea

	//Condicional switch

	switch ($color) {
		case 'blue':
			echo 'Color is blue';
			break;
		case 'red':
			echo 'Color is red';
			break;
		case 'green':
			echo 'Color is green';
			break;
		default:
			echo 'Other...';
			break;
	}

 ?>