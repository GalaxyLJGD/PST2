<!DOCTYPE html>

<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Página principal del sistema de registro" />
		<meta name="author" content="Grupo de PST II" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/header.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/navpublic.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/complementos/footer.css">
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/ingresar.css">

		<title>Ingresar - Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_public.php"); ?>

			<section class="contenido">
				<header>
					<h2>Inicio de Sesión</h2>
				</header>

				<form>					
					<div>
						<input type="text" name="">
						<label for="">Usuario</label>
					</div>

					<div>
						<input type="password" name="">
						<label for="">Contraseña</label>
					</div>

					<button>Ingresar</button>
				</form>
			</section>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
</html>