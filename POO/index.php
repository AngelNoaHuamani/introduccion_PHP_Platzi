<!DOCTYPE html>
<html>
<head>

<title>Programacion Orientada a Objetos</title>
<meta charset="utf-8">
        
<!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.37/js/uikit-icons.min.js"></script>

</head>


<body>

<div class="uk-position-center  uk-text-center">

<p class="uk-h3">
    Namespaces 
</p>
<p class="uk-h5">

<!-- 
Programacion Orientada a Objetos::POO
*Namespaces: con los namespaces podemos dividir el codigo y encapsularlo. 
Le asignamos un nombre de espacio a nuestro codigo 
para que cuando usemos el codigo de alguien mas no exista conflictos.
*require_once: archivo se cargo solo una vez
-->

<?php 

//importar archivo de clases 
include 'vehiculos/Auto.php';
include 'vehiculos/Camioneta.php';

//llamando namespace para usar en este archivo
use Vehiculos\Auto;
use Vehiculos\Camioneta;


echo "<strong> Clase Hija - Auto </strong> <br><br>"; 

//instancia 1
echo "<strong> Instancia 1 </strong> <br>"; 
	$carro = new Auto('Juan'); 
	$carro->movimiento();  
	echo "El propietario auto: " . $carro->getPropietario() . '<br>';

echo "<strong><br> Clase Hija - Camioneta </strong> <br><br>";	

//instancia 2
echo "<strong> Instancia 2 </strong> <br>";
	$camioneta = new Camioneta('Pepe', '4x4'); 
	$camioneta->movimiento();
	echo "El propietario camioneta: " . $camioneta->getPropietario(); 

?>


</p>
</div>

</body>
</html>