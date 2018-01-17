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
    Herencia 
</p>
<p class="uk-h5">

<!-- 
Programacion Orientada a Objetos::POO
*Herencia: es un proceso que nos ayuda a reutilizar codigo.
*Protected: sera private pero tambien sera accedida por las clases hijas
-->

<?php 


//clase Padre
	class Vehiculo {

		//atributo
		protected $propietario; 

		//metodo constructor
		public function __construct($chofer){
			$this->propietario = $chofer;
			echo "metodo-contructor<br>";
		}
		
		//metodo public
		public function movimiento(){ 
			echo "Moviendose vehiculo<br>";
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

//Clase hija 1
	class Auto extends Vehiculo{
		//metodo public
			public function movimiento(){ 
				echo "Auto: Moviendose<br>";
			}
	}

//Clase hija 2
	class Camioneta extends Vehiculo{
		
		private $tipo;

		//constructor padre e hija
		public function __construct($conductor, $type) {
			$this->tipo = $type;
		    /*
			//Contructor padre cuando es private
		    parent::__construct($conductor);
			*/
		    //accede con protected
			$this->propietario = $conductor;
		}
	    //metodo public
		public function movimiento(){ 
				echo "Camioneta - " . $this->tipo . ": Moviendose<br>";
		}
	}

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