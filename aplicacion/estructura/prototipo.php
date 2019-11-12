<?php 
//Modelo padre de las vistas (estructura de referencia)

class MODELO {
	public function __construct() {
		$this->db = new DATABASE;
	}

	public function Consult($sql) {
		try {
			$resultado = $this->db->Conectar()->prepare($sql);
			$resultado->execute();		
			return $resultado;	
		} catch (PDOException $e) {
			return false;
		}
	}

	public function Insert($sql) {
		$resultado = $this->db->Conectar()->prepare($sql);
		$resultado->execute();
	}

	public function Delete($sql) {
		$resultado = $this->db->Conectar()->prepare($sql);
		$resultado->execute();
	}

	public function Update($sql) {
		$resultado = $this->db->Conectar()->prepare($sql);
		$resultado->execute();
	}
}