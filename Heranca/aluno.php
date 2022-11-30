<?php
require_once 'pessoa.php';
class Aluno extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $matricula;
	private $curso;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function setMatricula($matricula) {
		$this->matricula = $matricula;
	}
	public function getMatricula() {
		return $this->matricula;
	}
	public function setCurso($curso) {
		$this->curso = $curso;
		$this->matricula = true;
	}
	public function getCurso() {
		return $this->curso;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function cancelarMatricula() {
		$this->matricula = false;
		$this->curso = null;
	}
}
?>