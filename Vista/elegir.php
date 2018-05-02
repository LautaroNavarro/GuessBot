<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>GuessBot - Elegir</title>
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
				Mmm, estoy pensando en 
				<?php 
				if (isset($_SESSION['numero_elegido'])){
					echo $_SESSION['numero_elegido'];
				}else{
					header('location:index.php');
				}
				?>
			</p>
		</div>
		<div class="container text-center">
		<form action="validacion/validarGenerarNumero.php" method="POST">
			<fieldset>
				<legend>Mi numero es</legend>
				<select name="pista" class="form-control">
					<option value="-1">Menor</option>
					<option value="0">Igual</option>
					<option value="1">Mayor</option>
				</select>
				<br>
				<input type="submit" class="btn btn-success">
			</fieldset>
		</form>
		</div>
		<br>
	</main>
</body>
</html>