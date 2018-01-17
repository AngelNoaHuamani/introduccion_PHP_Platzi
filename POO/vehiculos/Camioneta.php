<?php 

namespace Vehiculos;

//importando archivo de clase a heredar
require_once 'VehiculoBase.php';

//Clase hija 2
class Camioneta extends VehiculoBase{
	
	//atributo camioneta
	private $tipo;

	//constructor padre e hija
	public function __construct($conductor, $type) {
		$this->tipo = $type;
		$this->propietario = $conductor;
	}

    //metodo public
	public function movimiento(){ 
		echo "Camioneta - " . $this->tipo . ": Moviendose<br>";
	}

}

?>