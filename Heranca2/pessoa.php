<?php
abstract class Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $nome;
	private $idade;
	private $sexo;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getNome() {
		return $this->nome;
	}
	public function setNome($n) {
		$this->nome = $n;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setIdade($i) {
		$this->idade = $i;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($s) {
		$this->sexo = $s;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public final function fazerAniv() {
		$this->$idade++;
	}
}
?>