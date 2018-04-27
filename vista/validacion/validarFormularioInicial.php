<?php 
include('../../config.php');
include(SITE_ROOT.'/Controlador/allControllers.php');
include('Cookies.php');

if (!empty($_POST['nombre']) &&
	!empty($_POST['min']) &&
	!empty($_POST['max']) &&
	!empty($_POST['modo_de_juego'])) {
	Cookies::Recet();
	if ($_POST['modo_de_juego'] == 'adivinar') {
		ControladorOculto::crearOculto($_POST['min'], $_POST['max'], $_POST['nombre']);
	}else{
		ControladorRespuesta::crearRespuesta($_POST['min'], $_POST['max']);
	}
}else{
	header('location:../index.php');
}


 ?>