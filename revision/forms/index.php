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
        
        //validações
        if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
            $erros[] = "Idade precisa ser um inteiro";
        }
        
        if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            $erros[] = "Email inválido";
        }

        if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
            $erros[] = "Peso preisa ser um float";
        }
        
        if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
            $erros[] = "IP inválido";
        }

        if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
            $erros[] = "URL inválida";
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
        Idade: <input type="text" name="idade" id=""><br>
        Email: <input type="email" name="email" id=""><br>
        Peso: <input type="peso" name="peso" id=""><br>
        IP: <input type="ip" name="ip" id=""><br>
        URL: <input type="url" name="url" id=""><br>
        <button type="submit" name="enviar_formulario">Enviar Dados</button>
    </form>
    <br>

</body>
</html>