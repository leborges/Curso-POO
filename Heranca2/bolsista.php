<?php
require_once 'aluno.php';
class Bolsista extends Aluno {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $bolsa;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getBolsa() {
		return $this->bolsa;
	}
	public function setBolsa($b) {
		$this->bolsa = $b;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function pagarMensalidade() {
		echo "<p>Pagando mensalidade do bolsista: ".$this->getNome()."</p>";
	}
}
?>