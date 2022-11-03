<?php 
class Caneta {
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

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
}
?>