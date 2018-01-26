<?php

namespace Vehiculos;

//importando archivo
require_once 'VehiculoBase.php';

//Clase hija 2
	class Camioneta extends VehiculoBase{

		private static $contador = 0;

		//atributo camioneta
		private $tipo;

		//constructor padre e hija
		public function __construct($conductor, $type) {
			$this->tipo = $type;
			$this->propietario = $conductor;
			self::$contador++;
		}

	    //metodo public
		/*
		public function movimiento(){
			echo "Camioneta - " . $this->tipo . ": Moviendose<br>";
		}
		*/

		//metodo get static
		public static function getTotal(){
			return self::$contador;
		}

		//implementacion metodo abstract
			public function encendiendo(){
				return 'Camioneta: encendiendo<br>';
			}

	}

?>
