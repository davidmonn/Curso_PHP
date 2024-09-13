<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli("localhost", "root", "", "cursophp");

    // ASSUNTO DA AULA

    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();

    // UM RESULTADO
    $iteM = $result->fetch_assoc();

    // TODOS OS RESULTADOS

    $itens = $result->fetch_all();

    print_r($itens);


?>