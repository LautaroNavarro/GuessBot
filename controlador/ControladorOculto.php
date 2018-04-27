<?php 
session_start();
/**
* 
*/
class ControladorOculto
{

	private static function crearMensaje($nombre){
		$_SESSION['mensaje'] = new Mensaje($nombre);
	}

	public static function crearOculto($min, $max, $nombre){
		$oculto = new Oculto($min, $max);
		$oculto->generarValor();
		ControladorOculto::crearMensaje($nombre);
		$_SESSION['oculto'] = $oculto;
		header('location:../adivinar.php');
	}
	public static function crearPista($valor){
		$respuesta = $_SESSION['oculto']->validarRespuesta($valor);
		if ($respuesta == 0) {
			ControladorOculto::exito();
		}else{
		if ($respuesta > 0) {
			$respuesta = $_SESSION['mensaje']->getMensajeMayor();
		}else{
			$respuesta = $_SESSION['mensaje']->getMensajeMenor();
		}
		$_SESSION['pista'] = $respuesta;
		header('location:../adivinar.php');
		}
	}
	private static function exito(){
		$respuesta = 'Mi numero era '. $_SESSION['oculto']->getValor() . '<br>' . $_SESSION['mensaje']->getMensajeExito();
		$_SESSION['respuesta_correcta'] = $respuesta;
		header('location:../exito.php');
	}

}


 ?>