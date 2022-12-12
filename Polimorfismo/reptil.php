<?php
require_once 'animal.php';
class Reptil extends Animal {
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
	public function locomover(){
		echo "<p>Rastejando</p>";
	}
	public function alimentar(){
		echo "<p>Comendo vegetais</p>";
	}
	public function emitirSom(){
		echo "<p>Som de réptil</p>";
	}
}
?>