<?php
require_once 'lobo.php';
class Cachorro extends Lobo {
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
	public function reagirFrase($frase) {
		if ($frase == "Olá" || $frase == "Toma comida") {
			echo "<p>Abanar e latir</p>";
		} else {
			echo "<p>Rosnar</p>";
		}
	}
	public function reagirHora($hora, $min) {
		if ($hora <= 12) {
			echo "<p>Abanar</p>";
		} elseif ($hora <= 18) {
			echo "<p>Latir</p>";
		} else
			echo "<p>Ignorar</p>";
	}
	public function reagirDono($dono) {
		if ($dono == true) {
			echo "<p>Abanar o rabo</p>";
		} else
			echo "<p>Rosnar e late</p>";
	}
	public function reagirIdadePeso($idade, $peso) {
		if ($idade < 5) {
			if ($peso < 10) {
				echo "<p>Abanar</p>";
			} else {
				echo "<p>Latir</p>";
			}
		} else {
			if ($peso < 10) {
				echo "<p>Morder</p>";
			} else {
				echo "<p>Rosnar</p>";
			}
		}
	}
	
}
?>