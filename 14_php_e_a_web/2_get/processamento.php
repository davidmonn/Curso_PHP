<?php

    if(isset($_GET['name'])) {
        $nome = $_GET['name'];
        $idade = $_GET['idade'];
    } else {
        $nome =  'Padrao';
        $idade = "Padrao";
    }

?>

    <h1>O seu nome é: <?= $nome ?> </h1>
    <h2>Sua idade é de <?= $idade ?> anos</h2>