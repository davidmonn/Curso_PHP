<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem sucedida <br>";
    } catch(PDOException $e) {
        echo "Erro na conexão: ". $e->getMessage() . "<br>";
    }

    //ASSUNTO DA AULA

    // INFORMACOES A SEREM PUXADAS DO BANCO
    $idSelect = 5;

    // ESTRUTURA DE SELECAO
    $stmt = $conn->prepare("SELECT * FROM teste2 WHERE id > :idSelect");
    $stmt->bindParam(":idSelect", $idSelect);

    if($stmt->execute()) {
        echo "Itens selecionados com sucesso: <br>";
        $dadosSelect = $stmt->fetch(PDO::FETCH_ASSOC); // Usado para organizar o valor recebido em ASSOCIATIVO
        print_r($dadosSelect);
        echo "<br> <br>";
        $teste2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($teste2);

    } else {
        $erro = $stmt->errorInfo();
        echo "Erro: " . $erro[2];
    }

?>