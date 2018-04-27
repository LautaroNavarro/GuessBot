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



	<br>
</main>

</body>
</html>





