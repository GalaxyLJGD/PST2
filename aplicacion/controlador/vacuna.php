<?php 
//Controlador de la vista de vacuna (maestra)

class VACUNA extends CONTROLADOR {
	public function __construct() {
		parent::__construct();			
	}

	public function Renderizado_Principal() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/index');
	}

	public function Registrar() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/registrar');
	}

	public function Consultar() {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/consultar');
	}

	//Funciones del CRUD
	public function Incluir_Vacuna() {
		if (isset($_POST['vacuna'])) {
			if (!empty($_POST['vacuna'])) {
				$vacuna = strtolower($_POST['vacuna']);

				if (!$this->modelo->Validar_Vacuna($vacuna)) {
					$this->modelo->Incluir_Vacuna($vacuna);

					if (!$this->modelo->Validar_Vacuna($vacuna)) {
						echo "<p>¡Error inesperado! La vacuna no pudo ser registrada";
					} else {
						echo "<p>¡Transacción realizada! La vacuna fue registrada correctamente";
					}
				} else {
					echo "<p>¡Error en la transacción! La vacuna ya está registrada en el sistema";
				}
			} else {
				echo "<p>Campos Vacíos</p>";
			}
		} else {
			header('Location: ../' . strtolower(__CLASS__) . '/registrar');
		}
	}

	public function Ver_Vacunas() {
		echo $this->modelo->Consultar_Vacunas();
	}

	public function Actualizar_Estatus() {
		$this->modelo->Cambiar_Estatus($_POST['id']);

		echo "<p>¡Transacción realizada! El estatus de la vacuna a sido cambiado";
	}

	public function Eliminar_Vacuna() {
		$this->modelo->Eliminar($_POST['id']);

		if (!$this->modelo->Verificar_Vacuna($_POST['id'])) {
			echo "<p>¡Transacción realizada! La vacuna fue eliminada correctamente";
		} else {
			echo "<p>¡Error inesperado! La vacuna no pudo ser eliminada";			
		}
	}
}