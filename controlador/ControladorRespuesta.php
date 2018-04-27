<?php 
session_start();

/**
* 
*/
class ControladorRespuesta 
{

	public static function crearRespuesta($min,$max){
		$respuesta = New Respuesta((int)$min, (int)$max);
		$respuesta->generarValor();
		$_SESSION['respuesta'] = $respuesta;
		$_SESSION['numero_elegido'] = $_SESSION['respuesta']->getValor();
		header('location:../elegir.php');
	}	
	public static function updateMinMax($pista){
		if ($pista == 0) {
			ControladorRespuesta::exito();
		}else{
			$_SESSION['respuesta']->updateMinMax($pista);
			$_SESSION['respuesta']->generarValor($pista);
			$_SESSION['numero_elegido'] = $_SESSION['respuesta']->getValor();
			header('location:../elegir.php');
		}
	}

	public static function exito(){
		$respuesta = 'Para mi! '.$_SESSION['mensaje']->getNombre().' tu numero era '. $_SESSION['respuesta']->getValor();
		$_SESSION['respuesta_correcta'] = $respuesta;
		header('location:../exito.php');
	}
}

	
 ?>