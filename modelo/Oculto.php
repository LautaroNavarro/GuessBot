<?php

/**
* [Oculto | Esta clase se utiliza cuando el usuario 
*  			es quien adivina el numero seleccionado]
* [Metodos: | generarValor(), validarRespuesta()]
*/
class Oculto extends Numero
{

	/**
	 * [generarValor | Genera un valor aleatorio entre los atributos 
	 * 				 | minimo y maximo]
	 * @return [int] [valor aleatorio]
	 */
	public function generarValor(){
		$this->valor = rand($this->minimo , $this->maximo);
	}

	/**
	 * [validarRespuesta | retorna comparacion entre el numero del usuario 
	 * 					 | y el seleccionado]
	 * @param  [int] $adivinar [Numero seleccionado por el usuario]
	 * @return [int]           [igual = 0; mayor = +1; menor = -1]
	 */
	public function validarRespuesta($adivinar){
			if ($adivinar == $this->valor) {
				return 0;
			}
			return ($adivinar > $this->valor) ? -1 : +1;
	}

}

?>