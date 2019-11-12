<?php 
//Modelo de la vista de documento (maestra)

class DOCUMENTO_MOD extends MODELO {
	public function __construct() {
		parent::__construct();
	}

	public function Verificar_Documento($id) {
		$consulta = $this->Consult("SELECT id_doc FROM Documento WHERE id_doc = '$id'");

		if ($consulta->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function Validar_Documento($documento) {
		$consulta = $this->Consult("SELECT id_doc FROM Documento WHERE descrip_doc = '$documento'");

		if ($consulta->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function Incluir_Documento($documento, $estatus) {
		$registro = $this->Insert("INSERT INTO Documento VALUES ('', '$documento', '$estatus', '1')");
	}

	public function Consultar_Documentos() {
		$html = "";
		$consulta = $this->Consult("SELECT * FROM Documento ORDER BY id_doc");

		if ($consulta->rowCount() == 0) {
			$html = "No hay datos para mostrar";
		} else {
			$html = "<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Documento</th>
								<th>Obligatorio</th>
								<th>Activo</th>
							<tr>
						</thead>

						<tbody>";

			while ($fila = $consulta->fetch()) {
				if ($fila['obligat_doc'] == "1") {
					$obligatorio = "Si";
				} else {
					$obligatorio = "No";
				}


				if ($fila['status_doc'] == 1) {
					$estatus = "Si";

					$html .= "<tr>
								<td>" . $fila['id_doc'] . "</td>
								<td>" . $fila['descrip_doc'] . "</td>
								<td>" . $obligatorio . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_doc'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_doc'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_doc'] . "'>Eliminar</button>
							</tr>";
				} else {
					$estatus = "No";				

					$html .= "<tr>
								<td>" . $fila['id_doc'] . "</td>
								<td>" . $fila['descrip_doc'] . "</td>
								<td>" . $obligatorio . "</td>
								<td>" . $estatus . "</td>
								<td><button id='btn-editar' value='" . $fila['id_doc'] . "'>Editar</button>
								<td><button id='btn-deshabilitar' value='" . $fila['id_doc'] . "'>Deshabilitar</button>
								<td><button id='btn-eliminar' value='" . $fila['id_doc'] . "'>Eliminar</button>
							</tr>";
				}
			}

			$html .= "</tbody></table>";
		}

		return $html;
	}

	public function Cambiar_Estatus($id) {
		$consulta = $this->Consult("SELECT status_doc FROM Documento WHERE id_doc = '$id'");
		$fila = $consulta->fetch();

		if ($fila['status_doc'] == 1) {
			$this->Update("UPDATE Documento SET status_doc = '0' WHERE id_doc = '$id'");
		} else {
			$this->Update("UPDATE Documento SET status_doc = '1' WHERE id_doc = '$id'");
		}
	}

	public function Eliminar($id) {
		$this->Delete("DELETE FROM Documento WHERE id_doc = '$id'");
	}
}