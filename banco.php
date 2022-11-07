<!-- # - CONTA BANCO -

# Conta corrente - Creusa
# Abrir conta
# + R$500
# - R$100

# Conta poupança - Jubileu
# Abrir conta
# + R$300

# ATRIBUTOS
# (+) NumConta
# (#) TipoConta - Corrente(CC) / Poupança(CP)
# (-) Dono
# (-) Status
# (-) Saldo

# METODOS
# ContaBanco - Status(Fechado) / Saldo(R$0)
# (+) AbrirNovaConta() - Status(True) / TipoConta / Saldo(CC +R$50 / CP +R$150)
# (+) FecharConta() - Saldo(R$0)
# (+) Depositar() - Status(True)
# (+) Sacar() - Status(True) / Saldo(Saldo > Saque)
# (+) pagarMensalidade() - (CC R$12 / CP R$20) -->

<?php 
class Banco {
	public $num;
	protected $tipo;
	private $dono;
	private $status;
	private $saldo;

	public function __construct() {
		$this->setStatus(false);
		$this->setSaldo(0);
	}
	public function abrirNovaConta($num, $dono, $tipo) {
		if ($this->getStatus() == false) {
				$this->setStatus(true);
				$this->setNum($num);
				$this->setDono($dono);
				$this->setTipo($tipo);
			if ($tipo == "CC") {
				$this->setSaldo(50);
			} else
				$this->setSaldo(150);
		} else
			echo "A conta já foi criada.";
	}
	public function fecharConta() {
		if ($this->getStatus() == true && $this->saldo == 0) {
			$this->setStatus(false);
			echo "Sua conta foi encerrada com sucesso.";
		} else if ($this->getStatus() == true && $this->saldo > 0) {
			echo "Você deve sacar todo o dinheiro da conta antes de fecha-la.";
		} else if ($this->getStatus() == true && $this->saldo < 0) {
			echo "Você deverá quitar sua divida de R$".number_format($this->saldo,2,',','.')." para fechar sua conta.";
		} else
			echo "Criar uma conta antes.";
	}
	public function depositar($dinheiro) {
		$this->saldo += $dinheiro;
	}
	public function sacar($dinheiro) {
		$this->saldo -= $dinheiro;
	}
	public function pagarMensalidade() {
		if ($this->getTipo() == "CP") {
			$this->saldo -= 20;
		} else
			$this->saldo -= 12;
	}
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	public function setNum($num1) {
		$this->num = $num1;
	}
	public function setTipo($tipo1) {
		$this->tipo = $tipo1;
	}
	public function setDono($dono1) {
		$this->dono = $dono1;
	}
	public function setStatus($status1) {
		$this->status = $status1;
	}
	public function setSaldo($saldo1) {
		$this->saldo = $saldo1;
	}
	public function getNum() {
		return $this->num;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function getDono() {
		return $this->dono;
	}
	public function getStatus() {
		return $this->status;
	}
	public function getSaldo() {
		return $this->saldo;
	}
	
}
?>