<?php

    $validacoes = [];

    if(count($_POST) > 0) {

        if($_POST['nome'] === "") {
            $validacoes[] = "Por favor preencha o nome do usuario";
        }

        if($_POST['email'] === "" ) {
            $validacoes[] = "Por favor insira o email";
        }

        if($_POST['senha'] != $_POST['confirmacao']) {
            $validacoes[] = "As senhas deve ser iguais";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacao de Formulario</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
                <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    <div id="container">
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Digite o seu nome:">
            </div>
            <div>
                <input type="text" name="email" placeholder="Digite seu email:">
            </div>
            <div>
                <input type="password" name="senha" placeholder="Digite sua senha:">
            </div>
            <div>
                <input type="password" name="confirmacao" placeholder="Digite novamente a senha:">
            </div>
            <div>
                <input type="reset" value="Limpar">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

</body>
</html>