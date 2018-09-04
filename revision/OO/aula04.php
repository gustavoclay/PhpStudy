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
	$c1 = new Caneta('BIC', 'azul', 50);
	echo "<p>Eu tenho uma caneta {$c1->getModelo()} da cor {$c1->getCor()} de ponta {$c1->getPonta()}</p>";
	print_r($c1);

?>
</pre>
</body>
</html>
