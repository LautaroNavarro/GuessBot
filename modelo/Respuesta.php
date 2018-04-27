<?php 

/**
* [Respuesta | Esta clase se utiliza cuando el bot 
*  				es quien adivina el numero seleccionado 
*      			por el usuario]
* [Metodos: | generarValor(), updateMinMax()]
*/
class Respuesta extends Numero
{

	/**
	 * [generarValor | Asigna al atributo "valor" un entero, redondeado, resultado
	 * 				 | del valor intermedio entre max y min]
	 * @return [int] [valor asignado al atributo "valor"]
	 */
	public function generarValor(){
		if($this->maximo == 2){
			$this->valor = 1;
		}else{
			if ($this->minimo + 1 == $this->maximo) {
				$this->valor = $this->maximo;
			}else{
				$this->valor = floor(($this->maximo - $this->minimo)/2 + $this->minimo);
			}
		}
		return $this->valor;
	}

		/**
		 * [updateMinMax | Setea el maximo o el minimo, en funcion de la 
		 * 				 | respuesta que le envia el usuario]
		 * @param  integer $pista [Respuesta del usuario]
		 * @return [non]
		 */
		public function updateMinMax($pista = 0){
			if ($pista > 0) {
				$this->minimo = $this->valor;
			}elseif ($pista < 0) {
				$this->maximo = $this->valor;
			}
		}
	}
	
?>