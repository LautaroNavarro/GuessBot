<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GuessBot - Adivinar</title>
	<meta charset="utf-8">
	<?php include('partes/plugins.php'); ?>
</head>
<body>
	<?php include('partes/nav.php');?>

	<main role="main" class="container">

		<div class="jumbotron">
			<h1>ADIVINAR EL NUMERO</h1>
		</div>
		
		<div class="container text-center">
			<img src="resources/GuessBot.png" style="height: 15em;">
			<p>
				<span class="badge badge-pill badge-primary">GuessBot:</span>
				<?php 
				if (isset($_SESSION['pista'])){
					echo $_SESSION['pista'];
				}else{
					echo "Adelante, lanza un numero";
				}
				?>
			</p>
		</div>

		<div class="container text-center">
			<form action="validacion/validarGenerarPista.php" method="POST">
				<label>Numero que piensas: </label>
				<input type="number" name="valor" required autofocus>
				<input type="submit">
			</form>
			<br>
		</div>

		<br>
	</main>
</body>
</html>