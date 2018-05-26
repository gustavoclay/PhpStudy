<?php
//Meus dados
$nome = "Gustavo Clay";
$idade = 24;
$altura = 1.71;
echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura<br>";

//Alterando Dados
$nome = "João da Silva";
$idade = 30;
$altura = 1.80;
echo "Meu nome é $nome, minha idade é $idade e minha altura é $altura<br>";

echo "<hr>";

// Variáveis Dinâmicas
$carro = "fusca";
echo "$carro<br>";
$carro = 2.0;
echo "$carro<br>";

/*
//nomes válidos para variaveis
$nome
$_nome
$carro10
$nota1
$meu_nome
$meuNome

//nomes inválidos
$123nome
$nome*-+/-
$meu nome

// Php é Case Sensitive
*/
//String
echo "<hr>";
// Informações sobre a variável
$nome = "Teste";
var_dump($nome);
echo "<br>";
if(is_string($nome)):
	echo "É uma String";
else:
	echo "Não é uma String";
endif;
// int
echo "<hr>";
$idade = 18;
echo "<br>";
var_dump($idade);
echo "<br>";
if(is_int($idade)):
	echo "É um inteiro";
else:
	echo "Não é uma inteiro";
endif;

echo "<hr>";
//float
$altura = 1.72;
var_dump($altura);

//boolean
$valor = true;
var_dump($valor);
$valor = false;
var_dump($valor);

echo "<hr>";
//array
$carros = array("Gol", "uno", "camaro", 12, 2, 1.7);
var_dump($carros);

echo "<hr>";
//object
class cliente {
	public $nome;
	public function atribuirNome($nome){
		$this -> $nome = $nome;
	}
}

$cliente = new cliente();
$cliente -> atribuirNome("Gustavo");
var_dump($cliente);
