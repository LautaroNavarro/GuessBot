<?php 
include('../../config.php');
include(SITE_ROOT.'/Controlador/allControllers.php');

if (!empty($_POST['valor'])) {
	ControladorOculto::crearPista($_POST['valor']);
}else{
	header('location:../adivinar.php');
}

 ?>