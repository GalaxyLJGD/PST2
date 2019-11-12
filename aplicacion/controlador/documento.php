<?php 
//Controlador de la vista de documento (maestra)

class DOCUMENTO extends CONTROLADOR {
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
	public function Incluir_Documento() {
		if (isset($_POST['documento']) && isset($_POST['estatus'])) {
			if (!empty($_POST['documento']) && !empty($_POST['estatus'])) {
				$documento = strtolower($_POST['documento']);
				$estatus = $_POST['estatus'];

				if (!$this->modelo->Validar_Documento($documento)) {
					$this->modelo->Incluir_Documento($documento, $estatus);

					if (!$this->modelo->Validar_Documento($documento)) {
						echo "<p>¡Error inesperado! El documento no pudo ser registrado";
					} else {
						echo "<p>¡Transacción realizada! El documento fue registrado correctamente";
					}
				} else {
					echo "<p>¡Error en la transacción! El documento ya está registrado en el sistema";
				}
			} else {
				echo "<p>Campos Vacíos</p>";
			}
		} else {
			header('Location: ../' . strtolower(__CLASS__) . '/registrar');
		}
	}

	public function Ver_Documentos() {
		echo $this->modelo->Consultar_Documentos();
	}

	public function Actualizar_Estatus() {
		$this->modelo->Cambiar_Estatus($_POST['id']);

		echo "<p>¡Transacción realizada! El estatus del documento a sido cambiado";
	}

	public function Eliminar_Documento() {
		$this->modelo->Eliminar($_POST['id']);

		if (!$this->modelo->Verificar_Documento($_POST['id'])) {
			echo "<p>¡Transacción realizada! El documento fue eliminado correctamente";
		} else {
			echo "<p>¡Error inesperado! El documento no pudo ser eliminado";			
		}
	}
}