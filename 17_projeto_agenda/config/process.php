<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $contacts = [];

    // Primeira coisa que iremos fazer e puxar todos os dados da query

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    if($stmt->execute()) {
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //echo "Dados selecionados com sucesso <br>";
    } else {
        $erro = $stmt->errorInfo();
        echo "Erro ao selecionar dados: $erro <br>";
    }

?>