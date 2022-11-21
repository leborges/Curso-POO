<?php
require_once 'pessoa.php';


class Funcionario extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $setor;
	private $trabalhando;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function setSetor($setor) {
		$this->setor = $setor;
	}
	public function getSetor() {
		return $this->setor;
	}
	public function setTrabalhando($trabalhando) {
		$this->trabalhando = $trabalhando;
	}
	public function getTrabalhando() {
		return $this->trabalhando;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function mudarTrabalho() {
		$this->trabalhando =! $this->trabalhando;
	}
}
?>