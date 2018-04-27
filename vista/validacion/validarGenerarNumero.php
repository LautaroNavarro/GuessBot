<?php 
include('../../config.php');
include(SITE_ROOT.'/Controlador/allControllers.php');

if (isset($_POST['pista'])) {
	ControladorRespuesta::updateMinMax($_POST['pista']);
}else{
	header('location:../elegir.php');
}

 ?>