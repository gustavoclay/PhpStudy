<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload de Arquivos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
        if (isset($_POST['enviar_formulario'])) {
            $formatosPermitidos = array("png","jpg","jpeg", "gif","PNG", "JPG", "GIF", "JPEG");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
            
            if (in_array($extensao, $formatosPermitidos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extensao";

                if (move_uploaded_file($temporario, $pasta.$novoNome)) {
                    $mensagem = "Upload feito com sucesso!";
                } else {
                    $mensagem = "Não foi possível fazer upload!";
                }
            } else {
                $mensagem = "Formato inválido";
            }

            echo $mensagem;
    }
        
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo" id=""><br>
        <input type="submit" name="enviar_formulario">
    </form>


</body>
</html>