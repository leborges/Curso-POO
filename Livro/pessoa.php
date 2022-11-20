<?php
class Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $nome;
	private $idade;
	private $sexo;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}
	public function getSexo() {
		return $this->sexo;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function fazerAniver() {
		$this->setIdade(getIdade() + 1);
	}
}
?>