<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // ASSUNTO DA AULA

    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM teste2 WHERE id = ?");

    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();
    $linha = $result->fetch_row();

    print_r($linha);

    $conn->close();


?>