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
    Constructor y Destructor 
</p>
<p class="uk-h5">

<!-- 
Programacion Orientada a Objetos::POO
1. Constructor: sera llamado inmediatamente despues que nosotros creamos el objeto
2. Destructor: sera llamado en el momento que ya no exista ninguna referencia
-->

<?php 

//clase
	class Auto {

		//atributo
		private $propietario; 

		//metodo constructor
		public function __construct($chofer){
			$this->propietario = $chofer;
			echo "metodo-contructor<br>";
		}

		//metodo destructor
		public function __destruct(){
			echo 'metodo-destructor<br>';
		}
		
		//metodo public
		public function movimiento(){ 
			echo "Moviendose<br>";
		}

		//metodo getter
		public function getPropietario(){ 
			return $this->propietario;
		}

		//metodo setter	
		public function setPropietario($dueño){
			$this->propietario = $dueño;
		}

	}

echo "<strong> Clase Auto </strong> <br><br>"; 

//instancia 1
echo "<strong> Instancia 1 </strong> <br>"; 
	$carro = new Auto('Jorge'); 
	$carro->movimiento();  
	echo "El propietario es: " . $carro->getPropietario() . '<br>';

//instancia 2
echo "<strong> Instancia 2 </strong> <br>";
	$carro2 = new Auto('Frank'); 
	echo "El propietario es: " . $carro2->getPropietario(); 

?>


</p>
</div>

</body>
</html>