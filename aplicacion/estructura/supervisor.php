<?php 
//Controlador padre (estructura de referencia)

class CONTROLADOR {
	protected $vista;	
	protected $modelo;  

	public function __construct() {
		$this->vista = new VISTA; 
	}

	public function Cargar_Modelo($modeloActual) {
		$urlModelo = ('aplicacion/modelo/' . $modeloActual . '_mod.php');

		if (file_exists($urlModelo)) { 
			require_once($urlModelo); 	

			$nombreModelo = strtoupper($modeloActual) . '_MOD';
			$this->modelo = new $nombreModelo;
		}
	}
}