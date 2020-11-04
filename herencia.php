<?php 

	class clasePadre{
		public function metodoPadre(){
			return "Hola desde el padre";
		}
		public function metodo1(){
			return "este es metodo padre";
		}
	}

	class claseHijo extends clasePadre{
		public function metodohijo(){
			return parent::metodo1();
		}
		public function metodo1(){
			return "este es un metodo hijo";
		}
	}

	$obj= new claseHijo();
	echo $obj->metodoHijo();

 ?>