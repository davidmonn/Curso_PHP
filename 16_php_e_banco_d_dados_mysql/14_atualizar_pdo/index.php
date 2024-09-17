<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem sucedida <br>";
    } catch(PDOException $e){
        echo "Erro na conexão: " . $e->getMessage();
    }

    // ASSUNTO AULA

    //MONTANDO A ESTRUTURA DE UPDATE
    $stmt = $conn->prepare("UPDATE itens SET nome = :nomeItem, descricao = :descricao WHERE id = :idSelect");

    // DADOS RECEBIDOS A SEREM ALTERADOS
    $idSelect = 3;
    //$id = 9;
    //$nome = "Alexia Monteiro";
    //$hobbies = "Estudar";
    $nomeItem = "Teclado Microsfot";
    $descricao = "Este teclado é novo e esta na caixa.";
    
    //MONTANDO A ESTRUTURA DE UPDATE - PLACEHOLDERS
    $stmt->bindParam(":idSelect", $idSelect);
    //$stmt->bindParam(":id", $id);
    $stmt->bindParam(":nomeItem", $nomeItem);
    //$stmt->bindParam(":hobbies", $hobbies);
    $stmt->bindParam(":descricao", $descricao);

    if($stmt->execute()) {
        echo "Dados atualizados com sucesso <br>";
    } else {
        $erro = $stmt->errorInfo();
        echo "Erro: " . $erro[2];
    }

?>