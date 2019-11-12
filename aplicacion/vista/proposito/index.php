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
		<link rel="stylesheet" type="text/css" href="<?php echo constant('URL'); ?>publica/estilos/proposito.css">
		
		<title>Misión y Visión - Escuela Bolivariana «Villas del Pilar»</title>
	</head>
	
	<body>
		<?php require_once("aplicacion/vista/complementos/header.php"); ?>

		<section class="principal">
			<?php require_once("aplicacion/vista/complementos/nav_public.php"); ?>

			<section class="contenido">
				<header>
					<h2>Misión y Visión</h2>
				</header>			        

		        <figure>
		        	<img alt="imagen del interior de la escuela" src="publica/imagenes/muro.jpg"/>
		        	<figcaption>Frente de la escuela dentro del muro</figcaption>
		        </figure>
		        
			    <article>
			    	<header>
			    		<h3>Misión</h3>
			    	</header>

			    	<p>
			        	Promover acciones pedagógicas en un escenario permanente de integración y cohesión de los actores y autores del hecho pedagógico basado en el respeto, la tolerancia, la paz y la vida, bajo la orientación Pedagógica del Currículo de la Educación Bolivariana, y con el ideario de Simón Bolívar, Simón Rodríguez y Ezequiel Zamora. Así como el pensamiento de la Educadora Belén Sanjuán y el maestro Luis Beltrán Prieto Figueroa.
			        </p>
			    </article>
			       
			    <article>
			    	<header>
			    		<h3>Visión</h3>
			    	</header>

			    	<p>
			        	Transformar la Escuela Bolivariana «Villas del Pilar» y la comunidad en un espacio para la paz y la vida, abierta al dialogo basado en el respeto y la tolerancia, a la renovación pedagógica y a la integración comunitaria para que el trabajo sea productivo y en beneficio de todos y todas hacia la formación de un ciudadano digno, crítico, capaz de adaptarse a los retos que el país y la nueva sociedad, lo que requiere para asumir los grandes cambios sociales, mediante la comunicación asertiva.
			        </p>
			    </article>
			</section>
		</section>

		<?php require_once("aplicacion/vista/complementos/footer.php"); ?>
	</body>
</html>