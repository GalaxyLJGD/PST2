<?php 
//Controlador de la vista de usuario (maestra)

class USUARIO extends CONTROLADOR {
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

	public function Modificar($cedula) {
		$this->vista->Renderizar(strtolower(__CLASS__) . '/consultar');
	}


	//Funciones del CRUD
	public function Incluir_Usuario() {
		if (isset($_POST['ced']) && isset($_POST['tip_ced']) && isset($_POST['nom']) && isset($_POST['ape']) && isset($_POST['fec']) && isset($_POST['rol']) && isset($_POST['cla'])) {
			
			if (!empty($_POST['ced']) && !empty($_POST['tip_ced']) && !empty($_POST['nom']) && !empty($_POST['ape']) && !empty($_POST['fec']) && !empty($_POST['rol']) && !empty($_POST['cla'])) {

				$cedula = ($_POST['tip_ced'] . $_POST['ced']);
				$nombre = strtolower($_POST['nom']);
				$apellido = strtolower($_POST['ape']);
				$fecha = $_POST['fec'];
				$rol = $_POST['rol'];
				$clave = $_POST['cla'];

				if (!$this->modelo->Validar_Usuario($cedula)) {
					if (!$this->modelo->Validar_Persona($cedula, $nombre, $apellido)) {
						$this->modelo->Incluir_Persona($cedula, $nombre, $apellido, $fecha);
					}

					$this->modelo->Incluir_Usuario($cedula, $rol, $clave);

					if (!$this->modelo->Verificar_Usuario($cedula)) {
						echo "<p>¡Error inesperado! El usuario no pudo ser registrado";
					} else {
						echo "<p>¡Transacción realizada! El usuario fue registrado correctamente";
					}
				} else {
					echo "<p>¡Error en la transacción! El usuario ya está registrado en el sistema";
				}

			} else {
				echo "<p>Campos Vacíos</p>";
			}
		} else {
			header('Location: ../' . strtolower(__CLASS__) . '/registrar');
		}
	}

	public function Ver_Usuarios() {
		echo $this->modelo->Consultar_Usuarios();
	}

	public function Actualizar_Estatus() {
		$this->modelo->Cambiar_Estatus($_POST['cedula']);

		echo "<p>¡Transacción realizada! El estatus del usuario a sido cambiado";
	}

	public function Eliminar_Usuario() {
		$this->modelo->Eliminar($_POST['cedula']);

		if (!$this->modelo->Verificar_Usuario($_POST['cedula'])) {
			echo "<p>¡Transacción realizada! El usuario fue eliminado correctamente";
		} else {
			echo "<p>¡Error inesperado! El usuario no pudo ser eliminado";			
		}
	}
}