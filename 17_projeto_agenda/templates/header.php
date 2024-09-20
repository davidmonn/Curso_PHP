<?php

    include_once("config/url.php");
    include_once("config/process.php"); // Com isso sempre que iniciarmos a pagina, teremos o processamento de dados

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/estilo.css">
    <!-- BIBLIOTECA BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME (FONTE DE ICONES) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Projeto Agenda</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> <!-- Com essas classes ira nos ajudar a criar uma barra de navegacao muito mais rapida, pois nao iremos precisar inserir tantas linhas de CSS, pois os elementos ja iram vir editados como cor de fundo, cor de texto, bem proximo do que ja iremos precisar -->
            <a class="navbar-brand" href="<?php $BASE_URL ?>index.php"> <!-- navbar-brand e uma classe de nosso BOOTSTRAP -->
                <img src="<?php $BASE_URL ?>img/logo.svg" alt="Agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>create.php">Adicionar Contato</a>
                    <a class="nav-link active" id="home-link" href="<?php $BASE_URL ?>delete.php">Apagar contato</a>
                </div>
            </div>
        </nav>
    </header>