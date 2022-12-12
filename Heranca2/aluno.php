<?php
require_once 'pessoa.php';
# Não poderá ter filhas quando tiver o FINAL
// final class Aluno extends Pessoa {
class Aluno extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $matricula;
	private $curso;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getMatricula () {
		return $this->matricula;
	}
	public function setMatricula ($m) {
		$this->matricula = $m;
	}
	public function getCurso () {
		return $this->curso;
	}
	public function setCurso ($c) {
		$this->curso = $c;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	# Não poderá ser sobrescrito quando tiver o FINAL
	// public final function pagarMensalidade() {
	public function pagarMensalidade() {
		echo "<p>Pagando mensalidade do Aluno: ".$this->getNome()."</p>";
	}
}
?>