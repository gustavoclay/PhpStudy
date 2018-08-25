<?php
//senha para teste
$senha = 123456;
echo $senha."<br>";

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
