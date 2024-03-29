<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Transportes X</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/transportes.css" />
</head>
<body>

	<header>
		<div class="holder">
			<div class="logo">
				<img src="img/logo.png" width="100" alt="Transportes X">
				<h1>Transportes X</h1>
			</div>
			<!-- <div class="redes">
				iconos
			</div>	 -->
		</div>
	</header>


	<nav>
		<div class="holder">
			<ul>
				<li><a href="index.html">Home</a></li><li><a  href="nosotros.html">Nosotros</a></li><li><a href="servicios.html">Servicios</a></li><li><a  href="galeria.html">Galeria</a></li><li><a class="activo" href="contacto.php">Contacto</a></li>
			</ul>
		</div>
	</nav>
	<section class="holder">
		<div class="columna left">
			<h2>Complete el sig. formulario</h2><a name="contacto"></a>
			<form action="procesador_formulario.php" method="POST" class="formulario">
				<p>
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" name="nombre" required>
				</p>
				<p>
					<label for="email">Email</label>
					<input type="text" id="email" name="email" required>
				</p>
				<p>
					<label for="tel">Teléfono</label>
					<input type="text" id="tel" name="tel" required>
				</p>
				<p>
					<label for="comentario">Comentarios</label>
					<textarea id="comentario" name="comentario" required></textarea>
				</p>
				<p class="acciones">
					<input type="submit" value="Enviar">
				</p>
			</form>

		<?php 
		if (isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>
			
			<div class="msg"> El mensaje se envio correctamente </div>
		
		<?php } ?>


		
		</div>

		<div class="columna right">
			<h2>Otras vías de contacto</h2>
			<p>Tambien se puede comunicar con nosotros usando los siguiente medios:</p>
			<ul>
				<li>Tel: 1238-8956</li>
				<li>Email: info@transportes.com</li>
				<li>Facebook: facebook.com/transportesx</li>
				<li>Twitter: @transportesx</li>
			</ul>
			
		</div>

		
				
		
	</section>
	<footer>
		<p>Diseñado por Flavia Ursino - 2019</p>
	</footer>


</body>
</html>