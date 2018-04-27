<?php 
/**
* 
*/
class Cookies 
{
	public static function Recet(){
		unset($_SESSION['pista']);
		unset($_SESSION['oculto']);
		unset($_SESSION['respuesta']);
		unset($_SESSION['numero_elegido']);
	}
}


 ?>