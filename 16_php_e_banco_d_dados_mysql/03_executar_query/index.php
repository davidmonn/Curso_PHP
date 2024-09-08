<?php

    $host = "localhost";
    $user = "Teste";
    $pass = "teste123";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);
    
    //ASSUNTO DA AULA

    $sql = "SELECT * FROM itens";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();

?>