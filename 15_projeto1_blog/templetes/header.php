<?php
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- ESTILO DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
</head>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo"> <!-- USADO O BASE PARA SE CLICAR NO LOGO, LEVAR PARA O HOME -->
            <img src="<?= $BASE_URL ?>/imagens/logo.svg" alt="Blog Codar">
        </a>
        <nav> <!-- TAG DE NAVEGACAO -->
            <ul id="navbar">
                <li>
                    <a href="<?= $BASE_URL ?>" class="nav-link">HOME</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Categorias</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li>
                    <a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a>
                </li>
            </ul>
        </nav>
    </header>