<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {

	private $volume;
	private $ligado;
	private $tocando;
	
	function __construct() {
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}

	private function getVolume() {
		return $this->volume;
	}

	private function getLigado() {
		return $this->ligado;
	}

	private function getTocando() {
		return $this->tocando;
	}

	private function setVolume($volume) {
		$this->volume = $volume;
	}

	private function setLigado($ligado) {
		$this->ligado = $ligado;
	}

	private function setTocando($tocando) {
		$this->tocando = $tocando;
	}

	public function ligar() {
		$this->setLigado(true);
	}

	public function desligar() {
		$this->setLigado(false);
	}

	public function abrirMenu() {
		echo "<br>Está ligado: ".($this->getLigado()?"SIM":"NÃO")."<br>";
		echo "Está tocando: ".($this->getTocando()?"SIM":"NÃO")."<br>";
		echo "Volume: ".$this->getVolume();
		for ($i=0; $i < $this->getVolume(); $i+=10) { 
			echo " ■";
		}
	}

	public function fecharMenu() {
		echo "Fechando menu...";
	}

	public function maisVolume() {
		if ($this->getLigado() == true) {
			$this->setVolume($this->getVolume() + 5);
		} else
			echo "<p><b>Erro! Não posso aumentar o volume</b></p>";
	}

	public function menosVolume() {
		if ($this->getLigado() == true) {
			$this->setVolume($this->getVolume() - 5);
		} else
			echo "<p><b>Erro! Não posso diminuir o volume</b></p>";
	}

	public function ligarMudo() {
		if ($this->getLigado() == true && $this->getVolume() > 0) {
			$this->setVolume(0);
		}
	}

	public function desligarMudo() {
		if ($this->getLigado() == true && $this->getVolume() == 0) {
			$this->setVolume(50);
		}
	}

	public function play() {
		if ($this->getLigado() == true && $this->getTocando() == false) {
			$this->setTocando(true);
		}
	}

	public function pause() {
		if ($this->getLigado() == true && $this->getTocando() == true) {
			$this->setTocando(false);
		}
	}
}
?>