<?php
require_once 'mamifero.php';
class Cachorro extends Mamifero {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function enterrarOsso() {
		echo "<p>Enterrando o osso</p>";
	}
	public function abanarRabo() {
		echo "<p>Abanando o rabo</p>";
	}
	public function emitirSom() {
		echo "<p>Au!Au!Au!Au!</p>";
	}
}
?>