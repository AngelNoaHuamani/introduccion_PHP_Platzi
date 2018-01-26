<?php

namespace Vehiculos;

//clase Padre
	abstract class VehiculoBase {

		//atributo
		protected $propietario;

		//metodo constructor
		public function __construct($chofer){
			$this->propietario = $chofer;
			echo "metodo-contructor<br>";
		}
		
		//metodo public
		public function movimiento(){
			echo $this->encendiendo();
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

		//metodo abstract
		public abstract function encendiendo();
	}

?>
