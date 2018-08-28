<?php
//senha para teste
$senha = 123456;
echo $senha."<br>";

/* $senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura."<br>";
 */

$senhadb = '$2y$10$b3s7HjHuny4wIywoR7XsqeVe3XT2odxuf02Wg3TDLeIoEdgt5NrQO';

if (password_verify($senha, $senhadb)) {
    echo "Senha válida";
} else {
    echo "Senha inválida";
}
