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
<pre>
<?php
	$c1 = new Caneta;
	$c1->modelo = "BIC Cristal";
	$c1->cor = "Azul";
	//$c1->ponta = 0.5;
	//$c1->carga = 0.5;
	// $c1->tampada = true;
	$c1->rabiscar();
	$c1->tampar();
	print_r($c1);

?>
</pre>
</body>
</html>
