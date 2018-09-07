<?php

class Lutador
{
	//ATRIBUTOS
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	// CONSTRUTOR
	public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
	{
		$this->nome = $nome;
		$this->nacionalidade = $nacionalidade;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->setPeso($peso);
		$this->vitorias = $vitorias;
		$this->derrotas = $derrotas;
		$this->empates = $empates;
	}

	//METODOS
	private function apresentar()
	{
		# code...
	}

	private function status()
	{
		# code...
	}

	private function ganharLuta()
	{
		# code...
	}

	private function perderLuta()
	{
		# code...
	}

	private function empatarLuta()
	{
		# code...
	}


	//GET SET

	/**
	 * Get the value of nome
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @return  self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of nacionalidade
	 */
	public function getNacionalidade()
	{
		return $this->nacionalidade;
	}

	/**
	 * Set the value of nacionalidade
	 *
	 * @return  self
	 */
	public function setNacionalidade($nacionalidade)
	{
		$this->nacionalidade = $nacionalidade;

		return $this;
	}

	/**
	 * Get the value of idade
	 */
	public function getIdade()
	{
		return $this->idade;
	}

	/**
	 * Set the value of idade
	 *
	 * @return  self
	 */
	public function setIdade($idade)
	{
		$this->idade = $idade;

		return $this;
	}

	/**
	 * Get the value of altura
	 */
	public function getAltura()
	{
		return $this->altura;
	}

	/**
	 * Set the value of altura
	 *
	 * @return  self
	 */
	public function setAltura($altura)
	{
		$this->altura = $altura;

		return $this;
	}

	/**
	 * Get the value of peso
	 */
	public function getPeso()
	{
		return $this->peso;
	}

	/**
	 * Set the value of peso
	 *
	 * @return  self
	 */
	public function setPeso($peso)
	{
		$this->peso = $peso;

		return $this;
	}

	/**
	 * Get the value of categoria
	 */
	public function getCategoria()
	{
		return $this->categoria;
	}

	/**
	 * Set the value of categoria
	 *
	 * @return  self
	 */
	public function setCategoria($categoria)
	{
		$this->categoria = $categoria;

		return $this;
	}

	/**
	 * Get the value of vitorias
	 */
	public function getVitorias()
	{
		return $this->vitorias;
	}

	/**
	 * Set the value of vitorias
	 *
	 * @return  self
	 */
	public function setVitorias($vitorias)
	{
		$this->vitorias = $vitorias;

		return $this;
	}

	/**
	 * Get the value of derrotas
	 */
	public function getDerrotas()
	{
		return $this->derrotas;
	}

	/**
	 * Set the value of derrotas
	 *
	 * @return  self
	 */
	public function setDerrotas($derrotas)
	{
		$this->derrotas = $derrotas;

		return $this;
	}

	/**
	 * Get the value of empates
	 */
	public function getEmpates()
	{
		return $this->empates;
	}

	/**
	 * Set the value of empates
	 *
	 * @return  self
	 */
	public function setEmpates($empates)
	{
		$this->empates = $empates;

		return $this;
	}
}
