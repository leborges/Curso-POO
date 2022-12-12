<?php
require_once 'pessoa.php';
class Professor extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $especialidade;
	private $salario;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getEspecialidade() {
		return $this->especialidade;
	}
	public function setEspecialidade($e) {
		$this->especialidade = $e;
	}
	public function getSalario() {
		return $this->salario;
	}
	public function setSalario($s) {
		$this->salario = $s;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function receberAumento($v) {
		echo "Salário anterior: R$ ".number_format($this->salario,2,',','.');
		$this->salario += $v;
		echo "<br>Salário atual: R$ ".number_format($this->salario,2,',','.');
	}
}
?>