<?php

    $host = "localhost";
    $db = "daotest";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host:$host;dbname:$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão bem sucedida";
    } catch(PDOException $e) {
        $erro = $e->getMessage();
        echo "Erro: $erro";
    }

?>