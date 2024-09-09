<?php

    $host = "localhost";
    $user = "TesteDavid";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // ASSUNTO DA AULA

    $q = "CREATE TABLE teste_PHP (nome VARCHAR(100), sobrenome VARCHAR(100))";
    $drop = "DROP TABLE teste_PHP";

    $conn->query($drop);

    $conn->close(); 

?>