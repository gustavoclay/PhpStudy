<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fomulário Teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="dados.php" method="GET">
        Nome: <input type="text" name="nome" id=""><br>
        Email: <input type="email" name="email" id=""><br>
        <button type="submit">Enviar Dados</button>
    </form>
    <br>

    <a href="dados.php?nome=gustavo&idade=24">Enviar Dados</a>

</body>
</html>