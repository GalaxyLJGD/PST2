<?php 
//Modelo de la vista de usuario (maestra)

class USUARIO_MOD extends MODELO {
	public function __construct() {
		parent::__construct();
	}

	public function Consultar_Usuarios() {
		$html = "";
		$consulta = $this->Consult("SELECT * FROM Usuario INNER JOIN Persona ON Persona.id_per = Usuario.id_per AND Usuario.rol_usu != 'R' ORDER BY Persona.id_per");

		if ($consulta->rowCount() == 0) {
			$html = "No hay datos para mostrar";
		} else {
			$html = "<table>
						<thead>
							<tr>
								<th>Cédula</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Rol</th>
								<th>Activo</th>
							<tr>
						</thead>

						<tbody>";

			while ($fila = $consulta->fetch()) {
				if ($fila['rol_usu'] == "A") {
					$rol = "Administrador";
				} elseif ($fila['rol_usu'] == "D") {
					$rol = "Docente";
				}


				if ($fila['status_usu'] == 1) {
					$estatus = "Si";

					$html .= "<tr>
								<td>" . $fila['id_per'] . "</td>
								<td>" . $fila['nombre_per'] . "</td>
								<td>" . $fila['apellido_per'] . "</td>
								<td>" . $rol . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_per'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_per'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_per'] . "'>Eliminar</button>
							</tr>";
				} else {
					$estatus = "No";				

					$html .= "<tr>
								<td>" . $fila['id_per'] . "</td>
								<td>" . $fila['nombre_per'] . "</td>
								<td>" . $fila['apellido_per'] . "</td>
								<td>" . $rol . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_per'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_per'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_per'] . "'>Eliminar</button>
							</tr>";
				}
			}

			$html .= "</tbody></table>";
		}

		return $html;
	}

	public function Validar_Usuario($cedula) {
		$consulta = $this->Consult("SELECT id_per FROM Usuario WHERE id_per = '$cedula'");

		if (sizeof($consulta->fetch()) > 1) {
			return true;
		} else {
			return false;
		}
	}

	public function Validar_Persona($cedula, $nombre, $apellido) {
		$consulta = $this->Consult("SELECT id_per FROM Persona WHERE id_per = '$cedula' AND nombre_per = '$nombre' AND apellido_per = '$apellido'");

		if (sizeof($consulta->fetch()) > 1) {
			return true;
		} else {
			return false;
		}
	}

	public function Incluir_Persona($cedula, $nombre, $apellido, $fecha) {
		$this->Insert("INSERT INTO Persona VALUES ('$cedula', '$nombre', '$apellido', '$fecha')");
	}

	public function Incluir_Usuario($cedula, $rol, $clave) {
		$this->Insert("INSERT INTO Usuario VALUES ('$cedula', '$rol', '$clave', '1')");
	}

	public function Verificar_Usuario($cedula) {
		$consulta = $this->Consult("SELECT * FROM Usuario INNER JOIN Persona ON Persona.id_per = Usuario.id_per AND Usuario.id_per = '$cedula' AND Persona.id_per = '$cedula'");

		if (sizeof($consulta->fetch()) > 1) {
			return true;
		} else {
			return false;
		}
	}

	public function Cambiar_Estatus($cedula) {
		$consulta = $this->Consult("SELECT status_usu FROM Usuario WHERE id_per = '$cedula'");
		$fila = $consulta->fetch();

		if ($fila['status_usu'] == 1) {
			$this->Update("UPDATE Usuario SET status_usu = '0' WHERE id_per = '$cedula'");
		} else {
			$this->Update("UPDATE Usuario SET status_usu = '1' WHERE id_per = '$cedula'");
		}
	}

	public function Eliminar($cedula) {
		$this->Delete("DELETE FROM Usuario WHERE id_per = '$cedula'");
	}
}