<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Página principal de la escuela bolivariana Villad del Pilar" />
		<meta name="author" content="Grupo de PST II" />

		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/header.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/navpublic.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/footer.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/usuario/registrar.css">
		
		<title>Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_private.php"); ?>

			<section class="contenido">
				<header>
					<h2>Aperturar año escolar</h2>
					<a href="<?php echo constant('URL'); ?>periodo/Consultar">Consultar</a>
				</header>

				<form id="formulario">
					<div>
						<label for="per">Nombre del periodo escolar</label>
						<input type="text" name="per">
					</div>				

					<button id="btn-registrar">Registrar</button>
				</form>		
			</section>

			<div id="mensaje"></div>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
	<script type="text/javascript" src="<?php echo constant('URL'); ?>publica/librerias/periodo/registrar.js"></script>
</html>