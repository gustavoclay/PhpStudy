<?php
//Conexão com o Banco de Dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()) {
    echo "Falha na conexão com o Banco de Dados: ".mysqli_connect_error();
}

