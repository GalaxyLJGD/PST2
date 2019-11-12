<?php 
//Modelo de la vista de vacuna (maestra)

class VACUNA_MOD extends MODELO {
	public function __construct() {
		parent::__construct();
	}

	public function Verificar_Vacuna($id) {
		$consulta = $this->Consult("SELECT id_vac FROM Vacuna WHERE id_vac = '$id'");

		if ($consulta->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function Validar_Vacuna($vacuna) {
		$consulta = $this->Consult("SELECT id_vac FROM Vacuna WHERE nombre_vac = '$vacuna'");

		if ($consulta->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function Incluir_Vacuna($vacuna) {
		$registro = $this->Insert("INSERT INTO Vacuna VALUES ('', '$vacuna', '1')");
	}

	public function Consultar_Vacunas() {
		$html = "";
		$consulta = $this->Consult("SELECT * FROM Vacuna ORDER BY id_vac");

		if ($consulta->rowCount() == 0) {
			$html = "No hay datos para mostrar";
		} else {
			$html = "<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Vacuna</th>
								<th>Activo</th>
							<tr>
						</thead>

						<tbody>";

			while ($fila = $consulta->fetch()) {
				if ($fila['status_vac'] == 1) {
					$estatus = "Si";

					$html .= "<tr>
								<td>" . $fila['id_vac'] . "</td>
								<td>" . $fila['nombre_vac'] . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_vac'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_vac'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_vac'] . "'>Eliminar</button>
							</tr>";
				} else {
					$estatus = "No";				

					$html .= "<tr>
								<td>" . $fila['id_vac'] . "</td>
								<td>" . $fila['nombre_vac'] . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_vac'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_vac'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_vac'] . "'>Eliminar</button>
							</tr>";
				}
			}

			$html .= "</tbody></table>";
		}

		return $html;
	}

	public function Cambiar_Estatus($id) {
		$consulta = $this->Consult("SELECT status_vac FROM Vacuna WHERE id_vac = '$id'");
		$fila = $consulta->fetch();

		if ($fila['status_vac'] == 1) {
			$this->Update("UPDATE Vacuna SET status_vac = '0' WHERE id_vac = '$id'");
		} else {
			$this->Update("UPDATE Vacuna SET status_vac = '1' WHERE id_vac = '$id'");
		}
	}

	public function Eliminar($id) {
		$this->Delete("DELETE FROM Vacuna WHERE id_vac = '$id'");
	}
}