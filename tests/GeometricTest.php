<?php

namespace Dojo\Tests;

class GeometricTest extends \PHPUnit_Framework_TestCase
{
	protected $geometrical;

	public function setUp(){
		$this->geometrical = new \Dojo\Geometric();
	} 

	public function tearDOwn(){
		unset($this->geometrical);
	}

	public function testInstanceOfFirstClass()
	{
		$this->assertInstanceOf('Dojo\Geometric', new \Dojo\Geometric);
	}

	public function testCalcularAreaTriangulo()
	{
		$triangulo = array(
			'base' => 10,
			'altura' => 4,
		);

		$this->geometrical->setDados($triangulo);

		$this->assertArrayHasKey('base', $this->geometrical->data);
		$this->assertArrayHasKey('altura', $this->geometrical->data);

		$this->assertEquals(20, $this->geometrical->calcularAreaTriangulo());
	}

	public function testCalcularAreaTrianguloComAlturaZero()
	{
		$triangulo = array(
			'base' => 10,
			'altura' => 0,
		);

		$this->geometrical->setDados($triangulo);

		$this->assertFalse($this->geometrical->calcularAreaTriangulo());
	}

	public function testCalcularAreaTrianguloComBaseZero()
	{
		$triangulo = array(
			'base' => 0,
			'altura' => 4,
		);

		$this->geometrical->setDados($triangulo);

		$this->assertFalse($this->geometrical->calcularAreaTriangulo());
	}

	public function testCalcularAreaParalelograma()
	{
		$paralelo = array(
			'base' => 5.2,
			'altura' => 1.5
		);

		$this->geometrical->setDados($paralelo);

		$this->assertArrayHasKey('base', $this->geometrical->data);
		$this->assertArrayHasKey('altura', $this->geometrical->data);

		$this->assertEquals(7.8, $this->geometrical->calcularAreaParalelo());
	}

	public function testCalcularAreaParalelogramaComBaseZero()
	{
		$paralelo = array(
			'base' => 0,
			'altura' => 1.5
		);

		$this->geometrical->setDados($paralelo);

		$this->assertFalse($this->geometrical->calcularAreaParalelo());
	}

	public function testCalcularAreaParalelogramaComAlturaZero()
	{
		$paralelo = array(
			'base' => 1.5,
			'altura' => 0
		);

		$this->geometrical->setDados($paralelo);

		$this->assertFalse($this->geometrical->calcularAreaParalelo());
	}

	public function testCalcularAreaLosango()
	{
		$paralelo = array(
			'base' => 6,
			'altura' => 6
		);

		$this->geometrical->setDados($paralelo);

		$this->assertArrayHasKey('base', $this->geometrical->data);
		$this->assertArrayHasKey('altura', $this->geometrical->data);

		$this->assertEquals(18, $this->geometrical->calcularAreaLosango());
	}

	public function testCalcularAreaLosangoComBaseZero()
	{
		$paralelo = array(
			'base' => 0,
			'altura' => 1.5
		);

		$this->geometrical->setDados($paralelo);

		$this->assertFalse($this->geometrical->calcularAreaLosango());
	}

	public function testCalcularAreaLosangoComAlturaZero()
	{
		$paralelo = array(
			'base' => 1.5,
			'altura' => 0
		);

		$this->geometrical->setDados($paralelo);

		$this->assertFalse($this->geometrical->calcularAreaLosango());
	}

	public function testCalcularAreaTrapezio()
	{
		$trapezio = array(
			'basezao' => 8,
			'bazinha' => 14,
			'altura' => 6,
		);

		$this->assertEquals(66, $this->geometrical->calcularTrapezio));

	}
}
