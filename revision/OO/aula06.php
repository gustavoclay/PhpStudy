<?php
require_once 'ControleRemoto.php';
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
<h1>Projeto Controle Remoto</h1>
<pre>
<?php
$c = new ControleRemoto();
//$c->ligar();

$c->abrirMenu();
echo "<hr>";
var_dump($c);

?>
</pre>
</body>
</html>
