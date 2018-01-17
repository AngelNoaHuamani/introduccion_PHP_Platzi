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
    Introduccion Programacion Orientada a Objetos 
</p>
<p class="uk-h5">

<!-- 
Introduccion a Programacion Orientada a Objetos


Paradigma de Programacion::POO
1.clase: una plantilla de una entidad abstracta
2.instancia: elementos concretos de esa clase
*encapsulamiento: evitar que una variable private sea accedida 
solo por medio de uso de metodos getter y setter.

Contenido de una Clase::
3.Atributos (caracteristicas,variables)
4.Metodos (acciones,funciones)

Metodo de Acceso::
5.public: accede fuera de la clase
6.private: cuando no queremos que se acceda desde afuera de la clase

Palabras Reservadas:
7.$this: se refiere al objeto actual usado
-->

<?php 

class Auto //clase
	{
		private $propietario; //atributo
	
		public function movimiento(){ //metodo
			echo "Moviendose<br>";
		}

		public function getPropietario(){ //metodo getter
			return $this->propietario;
		}

		public function setPropietario($dueño){ //metodo setter	
			$this->propietario = $dueño;
		}

	}

echo "<strong> Clase Auto </strong> <br>"; 

	$carro = new Auto(); //instancia
	$carro->movimiento();  //llamada metodo public
	
	//llamada atributo public(atributo) o private(metodo get y set)
	$carro->setPropietario('Pedro'); 
	echo "El propietario es: " . $carro->getPropietario() . '<br>';

	$carro2 = new Auto(); //instancia 2
	$carro2->setPropietario('Daniel'); //metodo setter
	echo "El propietario es: " . $carro2->getPropietario(); //metodo getter

?>


</p>
</div>

</body>
</html>