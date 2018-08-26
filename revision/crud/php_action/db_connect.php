<?php
//Conexão com o banco de dados
$servername = 'localhost';
$user = 'root';
$password = '';
$db_name = 'crud';

$connect = mysqli_connect($servername, $user, $password, $db_name);
mysqli_set_charset($connect, 'utf8');

if (mysqli_connect_error()) {
	echo "Falha na conexão com o Banco de Dados: ".mysqli_connect_error();
}
