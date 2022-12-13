<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $login;
	private $totAssistido;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
	public function __construct($n, $i, $s, $l) {
		parent::__construct($n, $i, $s);
		$this->login = $l;
		$this->totAssistido = 0;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function viuMaisUm() {
		$this->totAssistido++;
	}
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getLogin() {
		return $this->login;
	}
	public function setLogin($login) {
		$this->login = $login;
	}
	public function getTotAssistido() {
		return $this->totAssistido;
	}
	public function setTotAssistido($totAssistido) {
		$this->totAssistido = $totAssistido;
	}
}
?>