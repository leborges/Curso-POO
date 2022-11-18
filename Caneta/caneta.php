<?php 
class Caneta {
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

#Aula004 - Metodo construtor
	// public function __construct() {
	// 	$this->cor = "Azul";
	// 	$this->tampar();
	// }
# OU	
	# Esse não funcionou (??)
	// public function Caneta() {
	// 	$this->cor = "Azul";
	// 	$this->tampar();
	// }
# OU
	public function __construct($m, $c, $p)	{
		$this->modelo = $m;
		$this->cor = $c;
		$this->ponta = $p;
		$this->setTampa(true);
		$this->carga = 90;
	}

	public function escrever() {
		if ($this->tampada == true) {
			echo "<br>Erro: Não posso escrever.";
		} else
			echo "<br>Estou escrevendo";
	}

	public function pintar() {
		if ($this->tampada == true) {
			echo "<br>Erro: Não posso pintar.";
		} else
			echo "<br>Estou pintando";
	}

	public function rabiscar() {
		if ($this->tampada == true) {
			echo "<br>Erro: Não posso rasbicar.";
		} else
			echo "<br>Estou rabiscando";
	}

	private function tampar() {
		$this->tampada = true;
	}

	protected function destampar() {
		$this->tampada = false;
	}

# Aula 004 - Métodos acessores e modificadores

	public function getModelo() {
		return $this->modelo;
	}

	public function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	public function getPonta() {
		return $this->ponta;
	}

	public function setPonta($ponta) {
		$this->ponta = $ponta;
	}

	public function getCor() {
		return $this->cor;
	}

	public function setCor($cor) {
		$this->cor = $cor;
	}

	public function getCarga() {
		return $this->carga;
	}

	public function setCarga($carga) {
		$this->carga = $carga;
	}

	public function getTampa() {
		return $this->tampada;
	}

	public function setTampa($tampa) {
		$this->tampada = $tampa;
	}
}
?>