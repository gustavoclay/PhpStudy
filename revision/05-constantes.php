<?php
//constantes
define('NOME', 'Jose Carlos');
define('TIMES', ['Vasco', 'Flamengo', 'Fluminese', 'Botafogo']);


var_dump(NOME);

echo "<br>";

var_dump(TIMES);

echo "<br>";

function exibeNome()
{
	echo NOME;
}

exibeNome();