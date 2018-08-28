<?php
//SESSÃO
session_start();
// Conexão com o Banco de Dados
require_once 'db_connect.php';
//CLEAR
function clear($input) {
	global $connect;
	//sql
	$var = mysqli_escape_string($connect ,$input);
	//XSS
	$var = htmlspecialchars($var);
	return $var;
}

if (isset($_POST['btn-cadastrar'])) {
	$nome = clear($_POST['nome']);
	$sobrenome = clear($_POST['sobrenome']);
	$email = clear($_POST['email']);
	$idade = clear($_POST['idade']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";

	if (mysqli_query($connect, $sql)) {
		$_SESSION['mensagem'] = 'Cadastrado com Sucesso!';
		header('Location: ../index.php');
	} else {
		$_SESSION['mensagem'] = 'Erro ao Cadastrar!';
		header('Location: ../index.php');
	}

}
