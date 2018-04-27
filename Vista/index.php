<!DOCTYPE html>
<html>
<head>
	<title>GuessBot</title>
	<meta charset="utf-8">
	<?php include('partes/plugins.php'); ?>
</head>
<body>
	<?php include('partes/nav.php');?>
	<main role="main" class="container">

		<div class="jumbotron">
			<div class="text-center">
				<h1 class="cover-heading">Hola soy GuessBot!</h1>
				<h2>En este juego, vas a tener que enfrentarme y adivinar mis numeros. Cada vez que lo intentes, te voy a decir si mi número es más grande o más pequeño.</h2>
				<p class="lead">
					Existen dos modalidades de Juego!<br>
					Una en la que vos elegis un numero y yo adivino, y otra en la que el numero lo eligo yo y adivinas vos.<br>
					Suerte!
				</p>
			</div>
		</div>

		<form class="form-control" action="validacion/validarFormularioInicial.php" method="POST">
			<fieldset>
				<legend>Nombre</legend>
				<input type="text" name="nombre" required autofocus placeholder="Lautaro" class="form-control">
			</label>
		</fieldset>
		<fieldset>
			<legend>Opciones de Juego</legend>
			<label>Rango (minimo - maximo)</label>
			<input type="number" name="min" required placeholder="1" class="form-control">
			<input type="number" name="max" required placeholder="100" class="form-control">
			<select name="modo_de_juego" required class="form-control">
				<option value="adivinar">ADIVINAR</option>
				<option value="elegir">ELEGIR</option>
			</select>
			<br>
		</fieldset>
		<input type="submit" class="btn btn-success">
	</form>

	<!-- Carrucel de fotos -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<h1>Algunas fotos mias</h1>
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="resources/imagen_bot_tres.png" alt="Bot en EventBrite">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="resources/imagen_bot_dos.png" alt="Sesión de fotos bot dos">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="resources/imagen_bot_uno.png" alt="Sesion de fotos bot 4">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- Fin del carrucel -->

	<br>
</main>

</body>
</html>





