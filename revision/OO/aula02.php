<?php
	require_once 'Caneta.php';
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
<?php
	$c1 = new Caneta;
	$c1->cor = 'Azul';
	$c1->ponta = '0.5';
	$c1->tampada = false;

	print_r($c1);
	echo "<hr>";
	$c1->tampar();
	$c1->rabiscar();
	echo "<hr>";
	$c1->destampar();
	$c1->rabiscar();
	echo "<hr>";

	$c2 = new Caneta;
	$c2->cor = 'Vermelha';
	$c2->ponta = '50';
	$c2->tampar();
	print_r($c2);

?>
</body>
</html>
