<?php
require_once 'mamifero.php';
class Lobo extends Mamifero {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function emitirSom() {
		echo "<p>Auuuuu!</p>";
	}
}
?>