<?php 
require_once 'animal.php';
class Mamifero extends Animal {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	protected $corPelo;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getCorPelo() {
		return $this->corPelo;
	}
	public function setCorPelo($c) {
		$this->corPelo = $c;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function locomover(){
		echo "<p>Correndo</p>";
	}
	public function alimentar(){
		echo "<p>Mamando</p>";
	}
	public function emitirSom(){
		echo "<p>Som de mamifero</p>";
	}
}
?>