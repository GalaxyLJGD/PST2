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
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/inicio.css">
		
		<title>Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_public.php"); ?>

			<section class="contenido">
				<header>
					<h2>Bienvenidos</h2>
				</header>

				<figure>
			       	<img alt="Foto de la entrada de la escuela" src="publica/imagenes/frente.jpg" />
			       	<figcaption>Foto satelital de la escuela.</figcaption>
			    </figure>

			    <article>
			    	<header>
			    		<h3>Propósito del Sitió</h3>
			    	</header>

			    	<p>
			    		Este sistema fue desarrollado para automatizar la inscripción, progresión y egreso de los alumnos de la Escuela Bolivariana «Villas del Pilar», facilitando el proceso y reduciendo sus costes.
			    	</p>
			    </article>
			</section>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
</html>