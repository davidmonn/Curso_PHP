<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // ASSUNTO DA AULA

    $id = 16;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");
    $stmt->bind_param("i", $id);

    $stmt->execute();

    if($stmt->error) {
        echo "Erro: " . $stmt->error;
    }

    $conn->close();

?>