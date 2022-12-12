<?php
require_once 'mamifero.php';
class Canguru extends Mamifero {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function usarBolsa() {
		echo "<p>Canguru está usando sua bolsa</p>";
	}
	public function locomover() {
		echo "<p>Saltando</p>";
	}
}
?>