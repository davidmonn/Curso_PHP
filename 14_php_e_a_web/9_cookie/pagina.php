<?php

    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }

    print_r($_COOKIE);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
    <h1>Pagina</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem vindo, <?= $nome ?> </p>
    <? endif; ?>

</body>
</html>