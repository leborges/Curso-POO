<?php
require_once 'animal.php';
class Ave extends Animal {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	protected $corPena;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getCorPena() {
		return $this->corPena;
	}
	public function setCorPena($c) {
		$this->corPena = $c;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function fazerNinho() {
		echo "<p>Fazendo ninho</p>";
	}
	public function locomover(){
		echo "<p>Voando</p>";
	}
	public function alimentar(){
		echo "<p>Comendo frutas</p>";
	}
	public function emitirSom(){
		echo "<p>Som de ave</p>";
	}
}
?>