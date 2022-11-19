<?php
require_once 'lutador.php';
class Luta {

# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -

	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovada;

# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -

	private function setDesafiado($desafiado) {
		$this->desafiado = $desafiado;
	}
	private function getDesafiado() {
		return $this->desafiado;
	}
	private function setDesafiante($desafiante) {
		$this->desafiante = $desafiante;
	}
	private function getDesafiante() {
		return $this->desafiante;
	}
	private function setRounds($rounds) {
		$this->rounds = $rounds;
	}
	private function getRounds() {
		return $this->rounds;
	}
	private function setAprovada($aprovada) {
		$this->aprovada = $aprovada;
	}
	private function getAprovada() {
		return $this->aprovada;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -

	public function marcarLuta($l1, $l2) {
		if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
			$this->setAprovada(true);
			$this->setDesafiado($l1);
			$this->setDesafiante($l2);
		} else {
			$this->setAprovada(false);
			$this->setDesafiado(null);
			$this->setDesafiante(null);
		}
	}

	public function lutar() {
		if ($this->getAprovada() == true) {
			$vencedor = rand(0, 2);
			switch ($vencedor) {
				case '0':
					$this->getDesafiado()->empatarLuta();
					$this->getDesafiante()->empatarLuta();
					$this->getDesafiado()->apresentar();
					$this->getDesafiante()->apresentar();
					echo "<p>Empate!</p>";
					break;
				case '1':
					$this->getDesafiado()->ganharLuta();
					$this->getDesafiante()->perderLuta();
					$this->getDesafiado()->apresentar();
					$this->getDesafiante()->apresentar();
					echo "<p>E o vencedor foi: <b>".$this->getDesafiado()->getNome()."</b></p>";
					break;
				case '2':
					$this->getDesafiado()->perderLuta();
					$this->getDesafiante()->ganharLuta();
					$this->getDesafiado()->apresentar();
					$this->getDesafiante()->apresentar();
					echo "<p>E o vencedor foi: <b>".$this->getDesafiante()->getNome()."</b></p>";
					break;
				default:
					echo "ERRO no switch";
					break;
			}
		} else {
			echo "A luta não pode acontecer.";
		}
	}
}
?>