<?php

    print_r($_POST);
    $login = $_POST['login'];
    $senha = $_POST['senha'];

?>

    <h1>Informacoes: </h1>
    <p>Seu login é: <?= $login ?></p>
    <p>Sua senha: *******</p>