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
</head>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo"> <!-- USADO O BASE PARA SE CLICAR NO LOGO, LEVAR PARA O HOME -->
            <img src="<?= $BASE_URL ?>/imagens/logo.svg" alt="Blog Codar">
        </a>
        <nav> <!-- TAG DE NAVEGACAO -->
            <li>
                <a href="<?= $BASE_URL ?>">HOME</a>
            </li>
            <li>
                <a href="#">Categorias</a>
            </li>
            <li>
                <a href="#">Sobre</a>
            </li>
            <li>
                <a href="<?= $BASE_URL ?>contato.php">Contato</a>
            </li>
        </nav>
    </header>