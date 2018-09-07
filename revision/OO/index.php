<?php
require_once 'Lutador.php';
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
<h1>Projeto UFC</h1>
<pre>
<?php
$l1 = new Lutador("João", "Brasileira", 25, 1.90, 85, 0, 0, 0);
print_r($l1);



?>
</pre>
</body>
</html>
