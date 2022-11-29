<?php 
class Lutador {

# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -

	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -

	function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
		$this->nome = $nome;
		$this->nacionalidade = $nacionalidade;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->setPeso($peso);
		$this->vitorias = $vitorias;
		$this->derrotas = $derrotas;
		$this->empates = $empates;
	}

# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -

	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNacionalidade($nacionalidade) {
		$this->nacionalidade = $nacionalidade;
	}
	public function getNacionalidade() {
		return $this->nacionalidade;
	}
	public function setIdade($idade) {
		$this->idade = $idade;
	}
	public function getIdade() {
		return $this->idade;
	}
	public function setAltura($altura) {
		$this->altura = $altura;
	}
	public function getAltura() {
		return $this->altura;
	}
	public function setPeso($peso) {
		$this->peso = $peso;
		$this->setCategoria();
	}
	public function getPeso() {
		return $this->peso;
	}
	public function setCategoria() {
		if ($this->peso < 52.2) {
			$this->categoria = "INVÁLIDO";
		} elseif ($this->peso <= 70.3) {
			$this->categoria = "LEVE";
		} elseif ($this->peso <= 83.9) {
			$this->categoria = "MÉDIO";
		} elseif ($this->peso <= 120.2) {
			$this->categoria = "PESADO";
		} else
			$this->categoria = "INVÁLIDO";
	}
	public function getCategoria() {
		return $this->categoria;
	}
	public function setVitorias($vitorias) {
		$this->vitorias = $vitorias;
	}
	public function getVitorias() {
		return $this->vitorias;
	}
	public function setDerrotas($derrotas) {
		$this->derrotas = $derrotas;
	}
	public function getDerrotas() {
		return $this->derrotas;
	}
	public function setEmpates($empates) {
		$this->empates = $empates;
	}
	public function getEmpates() {
		return $this->empates;
	}

# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -

	public function apresentar() {
		echo "<p><b>Lutador: </b>".$this->getNome()."</p>";
		echo "<p><b>Nacionalidade: </b>".$this->getNacionalidade()."</p>";
		echo "<p><b>Idade: </b>".$this->getIdade()." anos</p>";
		echo "<p><b>Altura: </b>".$this->getAltura()." cm</p>";
		echo "<p><b>Peso: </b>".$this->getPeso()." Kg</p>";
		echo "<p><b>Categoria: </b>".$this->getCategoria()."</p>";
		echo "<p><b>Vitórias: </b>".$this->getVitorias()."</p>";
		echo "<p><b>Derrotas: </b>".$this->getDerrotas()."</p>";
		echo "<p><b>Empates: </b>".$this->getEmpates()."</p>";
		echo "<p>- - - - - - - - - - - - - - - -</p>";
	}
	public function status() {
		echo "<p>O lutador <b>".$this->getNome()."</b> de peso <b>".$this->getPeso()." Kg</b> já tem <b>[ V: ".$this->getVitorias()." | E: ".$this->getEmpates()." | D: ".$this->getDerrotas()." ]</b></p>";
		echo "<p>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>";
	}
	public function ganharLuta() {
		$this->setVitorias($this->getVitorias() + 1);
	}
	public function perderLuta() {
		$this->setDerrotas($this->getDerrotas() + 1);
	}
	public function empatarLuta() {
		$this->setEmpates($this->getEmpates() + 1);
	}
}
?>