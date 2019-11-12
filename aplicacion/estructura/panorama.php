<?php 
//Renderizador padre de vistas (estructura de referencia)

class VISTA {
	public function Renderizar($vista) {
		require('aplicacion/vista/' . $vista . '.php');
	}
}