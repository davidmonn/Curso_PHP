<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli("localhost", "root", "", "cursophp");

    // ASSUNTO DA AULA

    $q = "nome * FROM itens ";

    $conn->query($q);
    print_r($conn);
    $conn->close();

?>