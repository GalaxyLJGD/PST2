<?php 
//Gestor de url y redireccionador de los controladores

class NUCLEO {
	private $url;
	private $controlador;

	public function __construct() {
		self::Gestionar_Url();
		self::Gestionar_Controlador();
		self::Gestionar_Metodo();
		self::Gestionar_Parametros();
	}

	private function Gestionar_Url() {
		if (isset($_GET['url'])) {
			$u = rtrim($_GET['url'], '/');
			$u = filter_var($u, FILTER_SANITIZE_URL);
			$u = explode('/', $u);

			$this->url = $u;
		} else {
			$_GET['url'] = null;
		}
	}

	private function Gestionar_Controlador() {
		if (empty($this->url[0])) {
			require_once('aplicacion/controlador/inicio.php'); 
			$this->controlador = new INICIO; 
		} else {
			$urlControlador = ('aplicacion/controlador/' . strtolower($this->url[0]) . '.php');	

			if (file_exists($urlControlador)) { 
				require_once($urlControlador);		
				$this->controlador = new $this->url[0]; 
				$this->controlador->Cargar_Modelo($this->url[0]); 
			} else {
				require_once('aplicacion/controlador/errores.php');
				$this->controlador = new ERRORES; 
			}
		}
	}

	private function Gestionar_Metodo() {
		if (isset($this->url[1])) {
			if (!method_exists($this->controlador, $this->url[1])) {
				header('Location: ../' . $this->url[0]);
			}
		} else {
			$this->controlador->Renderizado_Principal(); 
		}
	}

	private function Gestionar_Parametros() {
		if (sizeof($this->url) > 1) {	
			if (sizeof($this->url) > 2) { 	
				$parametros = [];	
				for ($i=2; $i < sizeof($this->url); $i++) {		
					array_push($parametros, $this->url[$i]); 	
				}
				$this->controlador->{$this->url[1]}($parametros); 
			} else {
				$this->controlador->{$this->url[1]}(); 
			}
		} 
	}
}
