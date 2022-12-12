<?php
require_once 'aluno.php';
class Tecnico extends Aluno {
# - - - - - - - - - - - - - - - - - ATRIBUTOS - - - - - - - - - - - - - - - - - - -
	private $registroProfissional;
# - - - - - - - - - - - - - - - MÉTODOS ESPECIAIS - - - - - - - - - - - - - - - - -
# - - - - - - - - - - - - - - - GETTERS & SETTERS - - - - - - - - - - - - - - - - -
	public function getRegistroProfissional() {
		return $this->registroProfissional;
	}
	public function setRegistroProfissional($r) {
		$this->registroProfissional = $r;
	}
# - - - - - - - - - - - - - - - - - MÉTODOS - - - - - - - - - - - - - - - - - - - -
	public function praticar() {
		echo "<p>O técnico ".$this->getNome()." está praticando o curso ".$this->getCurso().".</p>";
	}
}
?>