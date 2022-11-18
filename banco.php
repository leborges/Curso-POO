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
class ContaBanco {
	public $num;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	
	public function __construct() {
		$this->setStatus(false);
		$this->setSaldo(0);
	}
	
	public function abrirConta($tipo) {
		if ($this->getStatus() == false) {
				echo "<p>Sua conta foi criada com sucesso.</p>";
				$this->setTipo($tipo);
				$this->setStatus(true);
			if ($tipo == "CC") {
				$this->setSaldo(50);
			} else
				$this->setSaldo(150);
		} else
			echo "<p>Sua conta já foi criada.</p>";
	}
	
	public function fecharConta() {
		if ($this->getStatus() == true && $this->saldo == 0) {
			$this->setStatus(false);
			echo "<p>Sua conta foi encerrada com sucesso.</p>";
		} else if ($this->getStatus() == true && $this->saldo > 0) {
			echo "<p>Você deve sacar todo o dinheiro da conta antes de fecha-la.<br>Atualmente seu saldo é de R$ ".number_format($this->getSaldo(),2,',','.')."</p>";
		} else if ($this->getStatus() == true && $this->saldo < 0) {
			echo "<p>Sua conta está com um débito de R$ ".number_format($this->getSaldo(),2,',','.')."</p>";
		} else
			echo "<p>Crie uma conta antes na seção <i>Criar conta</i></p>";
	}
	
	public function depositar($dinheiro) {
		if ($this->getStatus() == true) {
			$this->setSaldo($this->getSaldo() + $dinheiro);
		} else {
			echo "<p>Sua conta ainda não foi criada.</p>";
		}
	}
	
	public function sacar($dinheiro) {
		if ($this->getStatus() == true && $this->getSaldo() >= $dinheiro) {
			$this->setSaldo($this->getSaldo() - $dinheiro);
		} elseif ($this->getStatus() == false) {
			echo "<p>Sua conta ainda não foi criada.</p>";
		} else {
			echo "<p>Você não possui saldo para efetuar este saque.<br>Atualmente seu saldo é de R$ ".number_format($this->getSaldo(),2,',','.')."</p>";
		}
	}
	
	public function pagarMensalidade() {
		$v = 0;
		if ($this->getStatus() == true) {
			if ($this->getTipo() == "CP") {
				$v = 20;
			} else
				$v = 12;
			$this->setSaldo($this->getSaldo() - $v);
		} else
			echo "<p>Sua conta ainda não foi criada.</p>";
	}
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	public function setNum($num) {
		$this->num = $num;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	public function setDono($dono) {
		$this->dono = $dono;
	}
	public function setStatus($status) {
		$this->status = $status;
	}
	public function setSaldo($saldo) {
		$this->saldo = $saldo;
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