<?php
require_once 'ContaBanco.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Teste</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<pre>
<?php
$c1 = new ContaBanco();
$c2 = new ContaBanco();

$c1->abrirConta("CC");
$c1->setDono("João");
$c1->setNumConta(1111);



$c2->abrirConta("CP");
$c2->setDono("Maria");
$c2->setNumConta(2222);



print_r($c1);
print_r($c2);

?>
</pre>
</body>
</html>
