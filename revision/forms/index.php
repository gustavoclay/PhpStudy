<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fomulário Teste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    if (isset($_POST['enviar_formulario'])) {
        //array erros
        $erros = array();
        
        //validações -sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($idade, FILTER_VALIDATE_INT)) {
            $erros = "Idade precisa ser um inteiro";
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erros = "Email inválido";
        }

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            $erros = "URL inválida";
        }

        //exibindo mensagens
        if (!empty($erros)) {
            foreach ($erros as $erro) {
                echo "<li> $erro </li>";
            }
        } else {
            echo "Formulário validado;";
        }

    }
    ?>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Nome: <input type="peso" name="nome" id=""><br>
        Idade: <input type="text" name="idade" id=""><br>
        Email: <input type="email" name="email" id=""><br>
        URL: <input type="text" name="url" id=""><br>
        <button type="submit" name="enviar_formulario">Enviar Dados</button>
    </form>
    <br>

</body>
</html>