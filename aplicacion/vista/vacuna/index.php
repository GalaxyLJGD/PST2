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
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/usuario/index.css">
		
		<title>Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_private.php"); ?>

			<section class="contenido">
				<header>
					<h2>Administrador de vacunas</h2>
				</header>

				<div>
					<div>
						<a href="<?php echo constant('URL'); ?>vacuna/Registrar">Registrar</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>	

					<div>
						<a href="<?php echo constant('URL'); ?>vacuna/Consultar">Actualizar</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>			
			</section>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
</html>