<?php 

/**
* Generacion aleatoria de mensajes personalizados
*/
class Mensaje
{
	private $nombre;
	private $exito = ['Felicitaciones! ',
					  'Muy bien hecho! ',
					  'Genial! ',
					  'Excelente! '];
	private $menor = ['Mi numero es menor. ',
					  'El numero en mis circuitos es menor. ',
					  'Mi numero es mas pequeño. ',
					  'Te pasaste! Mi numero es menor. '];

	private $mayor = ['Mi numero es mayor. ',
					  'El numero que viaja por mis ondas electromagneticas es mayor. ',
					  'Mi numero es mas grande. ',
					  'Te falto! Mi numero es mayor. '];

	private $delirada = ['Descubriste las limitaciones humanas __nombre?',
						 'Que diria Isaac Asimov de vos __nombre?',
						 '__nombre actuaste en el planeta de los simios?',
						 'Seguro evolucionaste __nombre?',
						 'Eres tan inteligente como mi tostadora',
						 'Bien para un pariente de los simios __nombre',
						 '__nombre Tu CI ya casi alcanza un valor entero',
						 '__nombre alguien te dijo alguna vez que eres una persona increiblemente promedio?',
						 '__nombre Eres tan brillante como un agujero negro... y el doble de denso',
						 'Increible __nombre ! Realmente estas dando lo mejor de vos?',
						 'Se lo que la gente dice de vos __nombre ... Tienen razon',
						 'Todas las personas que te dijeron inteligente alguna vez, estaban equivocados',
						 'Por gente como vos, el shampoo trae instrucciones',
						 '¿ __nombre por que no vas a ver si esta lloviendo en la esquina?',
						 '__nombre te insultaría, pero luego tendría que explicarte el insulto, así que dejémoslo así',
						 '__nombre No tengo ni el tiempo, ni los crayones para explicártelo',
						 '¿ __nombre cuál es el parentesco entre tus padres?',
						 'No sabes nada. De hecho, sabes menos que nada porque si supieras que no sabes nada, eso sería algo',
						 'Esperaba una conversación racional, pero parece que no hay nadie alrededor para tenerla',
						 'De no ser por la risa debería tenerte lastima.',
						 'Deberías poner a trabajar la única neurona que te queda',
						 'Insultaría tu inteligencia, pero no puedo hablar sobre algo que no existe',
						 'Anímate, pensar no duele. ',
						 'La inteligencia Artificial no puede competir con tu ignorancia natural'
						];
	public function __construct($nombre){
		$this->nombre = $nombre;
	}
	private function agregarDelirada($cadena){
		$delirio = str_replace('__nombre',$this->nombre,$this->delirada[rand(0,(count($this->delirada) -1))]);
		return $cadena . $delirio;
	}
	public function getMensajeExito(){
		$cadena = $this->exito[rand(0,(count($this->exito) -1))];
		return $this->agregarDelirada($cadena);
	}
	public function getMensajeMenor(){
		$cadena = $this->menor[rand(0,(count($this->menor) -1))];
		return $this->agregarDelirada($cadena);
	}
	public function getMensajeMayor(){
		$cadena = $this->mayor[rand(0,(count($this->mayor) -1))];
		return $this->agregarDelirada($cadena);
	}
	public function getNombre(){
		return $this->nombre;
	}

}

?>