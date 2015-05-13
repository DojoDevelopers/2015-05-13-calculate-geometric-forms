<?php

namespace Dojo;

class Geometric
{
	public $data;

	public function setDados($data)
	{
		$this->data = $data;
	}

	public function calcularAreaTriangulo()
	{
		$base = $this->data['base'];
		$altura = $this->data['altura'];

		if (!$this->valoresDiferenteDeZero()) {
			return false;
		}

		return $base * $altura / 2;
	}

	public function calcularAreaParalelo()
	{
		$base = $this->data['base'];
		$altura = $this->data['altura'];

		if (!$this->valoresDiferenteDeZero()) {
			return false;
		}

		return $base * $altura;
	}

	public function calcularAreaLosango()
	{
		$area = $this->calcularAreaParalelo();

		if (!$area)
		{
			return false;
		}

		return $area / 2;
	}

	protected function valoresDiferenteDeZero() 
	{
		$base = $this->data['base'];
		$altura = $this->data['altura'];
		if ($altura == 0 || $base == 0) {
			return false;
		}
		return true;
	}
}
