<?php
class Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $nome;
	private $idade;
	private $sexo;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
	function __construct($nome, $idade, $sexo) {
		$this->nome = $nome;
		$this->idade = $idade;
		$this->sexo = $sexo;
	}
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
		$this->idade++;
	}
}
?>