<?php 

include('../Modelo/Numero.php');
include('../Modelo/Oculto.php');

use PHPUnit\Framework\TestCase;

/**
 * [OcultoTest Clase de test PHPUnit]
 */
final class OcultoTest extends TestCase{

	public function testGenerarValor1(){
		$oculto = new Oculto(1,10);
		$posibilidades = [1 , 2, 3, 4, 5, 6, 7, 8, 9, 10];
		$oculto->generarValor();
		$this->assertContains($oculto->getValor(), $posibilidades);
	}
	public function testGenerarValor2(){
		$oculto = new Oculto(10,30);
		$posibilidades = [10, 11, 12, 13, 14, 15, 16, 17, 18, 19,
		                  20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
		$oculto->generarValor();
		$this->assertContains($oculto->getValor(), $posibilidades);
	}
	public function testGenerarValor3(){
		$oculto = new Oculto(97,110);
		$posibilidades = [97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107,
						  108, 109, 110];
		$oculto->generarValor();
		$this->assertContains($oculto->getValor(), $posibilidades);
	}

	public function testValidarRespuesta1(){
		$oculto = new Oculto(1,100);
		$oculto->setValor(10);
		$this->assertEquals(0, $oculto->validarRespuesta(10));
	}
	public function testValidarRespuesta2(){
		$oculto = new Oculto(1,100);
		$oculto->setValor(89);
		$this->assertEquals(1, $oculto->validarRespuesta(57));
	}
	public function testValidarRespuesta(){
		$oculto = new Oculto(1,100);
		$oculto->setValor(57);
		$this->assertEquals(-1, $oculto->validarRespuesta(66));
	}
}

 ?>
