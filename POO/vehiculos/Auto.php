<?php 

namespace Vehiculos;

//importando archivo  
require_once 'VehiculoBase.php';

//Clase hija 1
	class Auto extends VehiculoBase{
		
	//metodo public
		public function movimiento(){ 
			echo $this->encendiendo() . '<br>';
			echo "Auto: Moviendose<br>";
		}

	//implementacion metodo abstract
		public function encendiendo(){
			return 'Auto: encendiendo';
		}		

	}

?>