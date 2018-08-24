<?php
//conexão banco de dados
require_once 'dbconnect.php';
//controlando sessão
session_start();

//verificar se clicou no botão enviar
//conexão com o banco e verificar login e senha
if (isset($_POST['btn_entrar'])) {
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    

    if (empty($login) or empty($senha)) {
        $erros[] = "<li>O campo login e senha precissa ser preenchido;</li>";
    } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios Where login = '$login' AND senha = '$senha' ";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado)) {
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
            } else {
                $erros[] = "<li>Usuário e senha não conferem!</li>";
            }

        } else {
            $erros[] = "<li>Usuário inexistente!</li>";
        }
        mysqli_close($connect);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php
//verificar se posui erros
if (!empty($erros)) {
    foreach ($erros as $erro) {
        echo $erro;
    }
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Login: <input type="text" name="login" id=""><br>
    Senha: <input type="password" name="senha" id=""><br>
    <button type="submit" name="btn_entrar">Entrar</button>
</form>

</body>
</html>
