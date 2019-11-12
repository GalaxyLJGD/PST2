<?php 
//Conexión con la base de datos en PDO

class DATABASE {
	private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;

	public function __construct() {
		$this->host = constant('HOST');
        $this->db = constant('DATA_BASE');
        $this->user = constant('USER');
        $this->pass = constant('PASSWORD');
        $this->charset = constant('CHARSET');
	}

	public function Conectar() {
		try {
			$conexion =  "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
			$opciones = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false];

			$PDO = new PDO($conexion, $this->user, $this->pass, $opciones);
			return $PDO;
		} catch (PDOException $e) {
			print_r("Error de conexión: " . $e->getMessage());
		}
	}
}