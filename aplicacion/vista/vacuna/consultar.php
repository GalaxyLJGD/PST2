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
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/usuario/consultar.css">
		
		<title>Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_private.php"); ?>

			<section class="contenido">
				<header>
					<h2>Vacunas</h2>
					<a href="<?php echo constant('URL'); ?>vacuna/Registrar">Registrar</a>
				</header>

				<div id="tabla"></div>
			</section>

			<div id="mensaje"></div>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
	<script type="text/javascript" src="<?php echo constant('URL'); ?>publica/librerias/vacuna/consultar.js"></script>
</html>