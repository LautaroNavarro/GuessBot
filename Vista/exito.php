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
			<h1>FELICIDADES</h1>
		</div>
		<div class="container text-center">
			<img src="resources/GuessBot.png" style="height: 15em;">
			<p>
				<span class="badge badge-pill badge-primary">GuessBot:</span>
				<?php 
				echo $_SESSION['respuesta_correcta'];
				?>
			</p>
		</div>
		<div class="container text-center">
			<a href="index.php" class="btn btn-info">Volver a jugar</a>
		</div>
		
		<br>
	</main>
</body>
</html>