<?php
class Caneta {
	//Atributos
	private $modelo;
	private $cor;
	private $ponta;
	private $tampada;

	//Construtor
	public function __construct($modelo, $cor, $ponta) {
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->ponta = $ponta;
		$this->tampar();
	}
	/* #pode ser usado o nome da classe(DEPRECIADO A PARTIR DO PHP 7)
	public function Caneta($modelo, $cor, $ponta) {
		$this->modelo = 'Bic';
		$this->cor = 'Azul';
		$this->ponta = 0.5;

	} */

	//Metodos
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

	public function tampar() {
		$this->tampada = true;
	}

	public function destampar() {
		$this->tampada = false;
	}


}
