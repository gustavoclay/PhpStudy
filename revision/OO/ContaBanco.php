<?php

class ContaBanco {
	//ATRIBUTOS
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//CONSTRUTOR
	public function __construct() {
		$this->setSaldo(0);
		$this->setStatus(false);
	}

	//METODOS
	public function abrirConta($tipo) {
		$this->setTipo($tipo);
		$this->setStatus(true);
		if ($this->tipo == "CC") {
			$this->setSaldo(50);
		} elseif ($this->tipo == "CP") {
			$this->setSaldo(150);
		}
	}

	public function fecharConta() {
		if ($this->getSaldo() > 0) {
			echo "ERRO 001: Não é possível realizar esta operação. Conta com saldo positivo.";
		} elseif ($this->getSaldo() < 0) {
			echo "ERRO 002: Não é possível realizar esta operação. Conta com saldo negativo.";
		} else {
			$this.setStatus(false);
		}
	}

	public function despositar($valor) {
		if ($this->getStatus() == true) {
			$this->setSaldo($this->getSaldo() + $valor);
		} else {
			echo "ERRO 003: Não é possível realizar esta operação. Conta inativa.";
		}
	}

	public function sacar($valor) {
		if ($this->getStatus() == true) {
			if ($this->getSaldo() > $valor) {
				$this->setSaldo($this->getSaldo() - $valor);
			} else {
				echo "ERRO 004: Não é possível realizar esta operação. Saldo insuficiente.";
			}
		} else {
			echo "ERRO 005: Não é possível realizar esta operação. Conta inativa.";
		}
	}

	public function pagarMensal() {
		$valor = 0;
		if ($this->getTipo() == "CC") {
			$valor = 12;
		} elseif ($this->getTipo() == "CP") {
			$valor = 20;
		}
		if ($this->getStatus() == true) {
			if ($this->getSaldo() > $valor) {
				$this->setSaldo($this->getSaldo() - $valor);
			} else {
				echo "ERRO 006: Não é possível realizar esta operação. Saldo insuficiente ao cobrar mensalidade.";
			}
		} else {
			echo "ERRO 005: Não é possível realizar esta operação. Conta inativa.";
		}
	}

	//GETTERS SETTERS
	public function getNumConta() {
		return $this->numConta;
	}

	public function setNumConta($numConta) {
		$this->numConta = $numConta;
	}

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	public function getDono() {
		return $this->dono;
	}

	public function setDono($dono) {
		$this->dono = $dono;
	}

	public function getSaldo() {
		return $this->saldo;
	}

	public function setSaldo($saldo) {
		$this->saldo = $saldo;
	}

	public function getStatus() {
		return $this->status;
	}

	public function setStatus($status) {
		$this->status = $status;
	}


}
