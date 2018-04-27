<?php 

/**
* [Numero | Abstracta]
* [Atributos: | valor, minimo, maximo, intentos]
* [Metodos: | getters(), setters(), agregarIntento()]
*/
abstract class Numero
{
	protected $valor;
	protected $minimo;
	protected $maximo;
	protected $intentos = 0;

	public function __construct($minimo,$maximo){
		$this->minimo = $minimo;
		$this->maximo = $maximo;
	}
	public function getValor(){
		return $this->valor;
	}
	public function getMinimo(){
		return $this->minimo;
	}
	public function getMaximo(){
		return $this->maximo;
	}
	public function getIntentos(){
		return $this->intentos;
	}
	public function setMinimo($minimo){
		$this->minimo = $minimo;
	}
	public function setMaximo($maximo){
		$this->maximo = $maximo;
	}
	public function setValor($valor){
		$this->valor = $valor;
	}

	/*
	Se le suma uno al atributo intentos
	 */
	public function agregarIntento(){
		$this->intentos += 1;
	}

}

?>