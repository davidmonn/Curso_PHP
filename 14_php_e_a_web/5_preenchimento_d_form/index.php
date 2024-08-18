<?php

    $usuarios = [
        'nome' => 'David',
        'idade' => 27,
        'profissao' => 'Programador'
    ];

    if($usuarios) {
        $nome = $usuarios['nome'];
        $idade = $usuarios['idade'];
        $profissao = $usuarios['profissao'];
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preenchimento de Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form action="index.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome:" value="<?= $nome ?>">
        </div>
        <div>
            <input type="number" name="idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" value="<?= $profissao ?>">
        </div>
        <div>
            <input class="enviar" type="submit" name="Enviar" value="Enviar">
        </div>
    </form>
</body>
</html>