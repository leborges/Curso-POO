<?php
require_once 'pessoa.php';
require_once 'publicacao.php';
class Livro {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
	function __construct($titulo, $autor, $totPaginas, $leitor) {
		$this->titulo = $titulo;
		$this->autor = $autor;
		$this->totPaginas = $totPaginas;
		$this->leitor = $leitor;
		$this->aberto = false;
		$this->pagAtual = 0;
	}
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}
	public function getTitulo() {
		return $this->titulo;
	}
	public function setAutor($autor) {
		$this->autor = $autor;
	}
	public function getAutor() {
		return $this->autor;
	}
	public function setTotPaginas($totPaginas) {
		$this->totPaginas = $totPaginas;
	}
	public function getTotPaginas() {
		return $this->totPaginas;
	}
	public function setPagAtual($pagAtual) {
		$this->pagAtual = $pagAtual;
	}
	public function getPagAtual() {
		return $this->pagAtual;
	}
	public function setAberto($aberto) {
		$this->aberto = $aberto;
	}
	public function getAberto() {
		return $this->aberto;
	}
	public function setLeitor($leitor) {
		$this->leitor = $leitor;
	}
	public function getLeitor() {
		return $this->leitor;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function detalhes() {
		echo "<p>" . $this->titulo . " escrito por " . $this->autor . ".</p>";
		echo "<p>Total de pág.: " . $this->totPaginas . " | Pág. atual: " . $this->pagAtual . ".</p>";
		echo "<p>Leitor: " . $this->leitor->getNome() . "</p><hr>";
	}
	public function abrir() {
		$this->aberto = true;
	}
	public function fechar() {
		$this->aberto = false;
	}
	public function folhear($p) {
		if ($p <= $this->totPaginas) {
			$this->setPagAtual($p);
		}
	}
	public function avancarPag() {
		$this->pagAtual++;
	}
	public function voltarPag() {
		$this->pagAtual--;
	}
}
?>