<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
class Visualizacao {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $espectador;
	private $filme;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
	public function __construct($espectador, $filme) {
		$this->espectador = $espectador;
		$this->filme = $filme;
		$this->filme->setViews($this->filme->getViews() + 1);
		$this->espectador->viuMaisUm();
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function avaliar() {
		$this->filme->setAvaliacao(5);
	}
	public function avaliarNota($n) {
		$this->filme->setAvaliacao($n);
	}
	public function avaliarPorc($p) {
		if ($p <= 20) {
			$this->filme->setAvaliacao(3);
		} elseif ($p <= 50) {
			$this->filme->setAvaliacao(5);
		} elseif ($p <= 90) {
			$this->filme->setAvaliacao(8);
		} else {
			$this->filme->setAvaliacao(10);
		}

	}
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getEspectador() {
		return $this->espectador;
	}
	public function setEspectador($espectador) {
		$this->espectador = $espectador;
	}
	public function getFilme() {
		return $this->filme;
	}
	public function setFilme($filme) {
		$this->filme = $filme;
	}
}
?>