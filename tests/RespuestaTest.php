<?php 

include('../Modelo/Numero.php');
include('../Modelo/Respuesta.php');

use PHPUnit\Framework\TestCase;

/**
 * [OcultoTest Clase de test PHPUnit]
 */
final class RespuestaTest extends TestCase{

	public function testGenerarValor1(){
		$respuesta = new Respuesta(1,10);
		$this->assertEquals(5,$respuesta->generarValor());
	}
	public function testGenerarValor2(){
		$respuesta = new Respuesta(56,249);
		$this->assertEquals(152,$respuesta->generarValor());
	}
	public function testGenerarValor3(){
		$respuesta = new Respuesta(1,367);
		$this->assertEquals(184,$respuesta->generarValor());
	}
	public function testUpdateMinMax1(){
		$respuesta = new Respuesta(0,100);
		$respuesta->generarValor();
		$respuesta->updateMinMax(-1);
		$this->assertEquals(50, $respuesta->getMaximo());
	}
	public function testUpdateMinMax2(){
		$respuesta = new Respuesta(140,175);
		$respuesta->generarValor(); /* valor = 157 */
		$respuesta->updateMinMax(1);
		$this->assertEquals(157, $respuesta->getMinimo());
	}
	public function testUpdateMinMax3(){
		$respuesta = new Respuesta(1,2);
		$respuesta->generarValor();
		$respuesta->updateMinMax(1);
		$this->assertEquals(1, $respuesta->getMinimo());
	}
}

 ?>