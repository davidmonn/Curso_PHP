<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // ASSUNTO DA AULA

    $table = "itens";
    $nome = "Xicara";
    $descricao = "É uma xicara usada de cor rosa";
    
    $q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')"; // Para inserir algo nao podemos esquecer das aspas.

    $conn->query($q);

    $conn->close();

    print_r($conn);

?>