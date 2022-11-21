<?php
require_once 'pessoa.php';

class Professor extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $especialidade;
	private $salario;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function setEspecialidade($especialidade) {
		$this->especialidade = $especialidade;
	}
	public function getEspecialidade() {
		return $this->especialidade;
	}
	public function setSalario($salario) {
		$this->salario = $salario;
	}
	public function getSalario() {
		return $this->salario;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function receberAum($d) {
		$this->salario += $d;
	}
}
?>