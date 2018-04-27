<?php 

/**
* Generacion aleatoria de mensajes personalizados
*/
class Mensaje
{
	private $nombre;
	private $exito = ['Felicitaciones __nombre Eres tan inteligente como mi tostadora',
					  'Muy bien hecho __nombre y tan solo te tomo medio siglo!',
					  'Bastante bien para un pariente de los simios __nombre',
					  'Excelente  __nombre Tu CI ya casi alcanza un valor entero'];
	private $menor = ['Mi numero es menor. Que pasa __nombre?',
					  'El numero en mis circuitos es menor __nombre',
					  'Mi numero es mas pequeño. Seguro evolucionaste __nombre?',
					  'Te pasaste! Mi numero es menor __nombre'];
	private $mayor = ['Mi numero es mayor. Descubriste las limitaciones humanas __nombre?',
					  'El numero que viaja por mis ondas electromagneticas es mayor __nombre',
					  'Mi numero es mas grande. Que diria Isaac Asimov de vos __nombre?',
					  'Te falto! Mi numero es mayor __nombre'];

	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	public function getMensajeExito(){
		$cadena = $this->exito[rand(0,(count($this->exito) -1))];
		return str_replace('__nombre',$this->nombre,$cadena);
	}
	public function getMensajeMenor(){
		$cadena = $this->menor[rand(0,(count($this->menor) -1))];
		return str_replace('__nombre',$this->nombre,$cadena);
	}
	public function getMensajeMayor(){
		$cadena = $this->mayor[rand(0,(count($this->mayor) -1))];
		return str_replace('__nombre',$this->nombre,$cadena);
	}
	public function getNombre(){
		return $this->nombre;
	}
}

?>