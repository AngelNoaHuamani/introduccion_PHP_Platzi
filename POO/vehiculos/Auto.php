<?php 

namespace Vehiculos;

//importando archivo de clase a heredar 
require_once 'VehiculoBase.php';

//Clase hija 1
	class Auto extends VehiculoBase{
		
		//metodo public
			public function movimiento(){ 
				echo "Auto: Moviendose<br>";
			}

	}

?>