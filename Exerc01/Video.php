<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $titulo;
	private $avaliacao;
	private $views;
	private $curtidas;
	private $reproduzindo;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
	public function __construct($t) {
		$this->titulo = $t;
		$this->avaliacao = 0;
		$this->views = 0;
		$this->curtidas = 0;
		$this->reproduzindo = false;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function play() {
		$this->reproduzindo = true;
	}
	public function pause() {
		$this->reproduzindo = false;
	}
	public function like() {
		$this->curtidas++;
	}
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getTitulo() {
		return $this->titulo;
	}
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}
	public function getAvaliacao() {
		return $this->avaliacao;
	}
	public function setAvaliacao($avaliacao) {
		// $this->avaliacao = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
		$this->avaliacao = $this->getAvaliacao() + $avaliacao / $this->getViews();
	}
	public function getViews() {
		return $this->views;
	}
	public function setViews($views) {
		$this->views = $views;
	}
	public function getCurtidas() {
		return $this->curtidas;
	}
	public function setCurtidas($curtidas) {
		$this->curtidas = $curtidas;
	}
	public function getReproduzindo() {
		return $this->reproduzindo;
	}
	public function setReproduzindo($reproduzindo) {
		$this->reproduzindo = $reproduzindo;
	}
}
?>