<?php
require_once 'animal.php';
class Peixe extends Animal {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	protected $corEscama;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getCorEscama() {
		return $this->corEscama;
	}
	public function setCorEscama($c) {
		$this->corEscama = $c;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function soltarBolha() {
		echo "<p>Soltando bolinhas</p>";
	}
	public function locomover(){
		echo "<p>Nadando</p>";
	}
	public function alimentar(){
		echo "<p>Comendo substâncias</p>";
	}
	public function emitirSom(){
		echo "<p>Peixe não emite som</p>";
	}
}
?>