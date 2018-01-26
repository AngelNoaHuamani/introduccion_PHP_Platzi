<?php

namespace Vehiculos;

//importando archivo
require_once 'VehiculoBase.php';

//Clase hija 3
	class Carrito extends VehiculoBase {

	//metodo public
		public function movimiento(){
			echo $this->encendiendo() . '<br>';
			echo "Auto: Moviendose<br>";
		}

	//implementacion metodo abstract
		public function encendiendo(){
			throw new \Exception("El carrito no tiene motor para encender", 1);
		}

	}

?>
