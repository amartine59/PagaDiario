
<body background="Imagenes/a.jpg">

<?php


	include 'Cliente.php';

	Class Panel{

		private $ar;

		public function __construct(){
			$this->ar = array();
		}

		public function agregarCliente($Id,$No,$Ap,$Dir,$Tel,$Es){
			$l = new Cliente($Id,$No,$Ap,$Dir,$Tel,$Es);
			array_push($this->ar, $l);
		}

		public function imprimir(){
			$id = 0;
			foreach ($this->ar as $clave => $valor) {
				$id = $id + 1;
				echo '<font color="white"'." face='Georgia' size='5'>"." No de Orden: ".$clave.",Identificacion: ".$valor->getIdentificacion().", Nombres: ".$valor->getNombres().", Apellidos: ".$valor->getApellidos().", Direccion: ".$valor->getDireccion().", Telefono: ".$valor->getTelefono().", Estado: ".$valor->getEstado()."<br>".'</font>';
			}
		}

		public function buscarIdentificacion($Id){
			foreach ($this->ar as $clave => $valor) {
				if ($Id == $valor->getIdentificacion()) {
					echo '<font color="white"'." face='Georgia' size='5' >"."No de Orden: ".$clave.", Identificacion: ".$valor->getIdentificacion().", Nombres: ".$valor->getNombres().", Apellidos: ".$valor->getApellidos().", Direccion: ".$valor->getDireccion().", Telefono: ".$valor->getTelefono().", Estado: ".$valor->getEstado()."<br>".'</font>';
				}
			}
		}




	}
?>
