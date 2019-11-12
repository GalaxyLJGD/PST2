<?php 
//Controlador de la vista de errores

class ERRORES extends CONTROLADOR {
	public function __construct() {
		parent::__construct();		
	}

	public function Renderizado_Principal() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/index');
	}
}