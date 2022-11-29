<?php
require_once 'pessoa.php';
class Livro {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -

	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
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
		
	}
}
?>