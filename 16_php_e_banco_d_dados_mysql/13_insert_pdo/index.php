<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // ASSUNTO DA AULA

    // TESTE CHECAGEM

    $stmtCheck = $conn->prepare("SELECT COUNT(*) FROM itens WHERE nome = :nome");
    $nome = "Suporte Monitor";
    $descricao = "O suporte esta novo e ainda na caixa";

    $stmtCheck->bindParam(":nome", $nome);
    $stmtCheck->execute();
    $count = $stmtCheck->fetchColumn();

    if($count > 0) {
        echo "Erro: Item com este nome ja existe";
    } else {
        $stmtInsert = $conn->prepare("INSERT INTO from itens(nome, descricao) VALUES(:nome, :descricao)");
        $stmtInsert->bindParam(":nome", $nome);
        $stmtInsert->bindParam(":descricao", $descricao);

        if($stmtInsert->execute()) {
            echo "Item inserido com sucesso <br>";
        } else {
            $erro = $stmtInsert->errorInfo();
            echo "Erro: " . $erro[2];
        }
    }

    /*AULA

    //$stmt = $conn->prepare("DELETE FROM itens WHERE id = :id"); // DELETE
    $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES(:nome, :descricao)");

    $id = 9;

    //$nome = "Suporte Monitor";  NOME E DESCRICAO FORAM DEIXADO COMO COMENT. PARA TESTAR CHECAGEM
    //$descricao = "O suporte esta novo e ainda na caixa";

    //$stmt->bindParam(":id", $id); // DELETAR COM ID

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    if($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        $erro = $stmt->errorInfo();
        echo "Erro ao inserir: " . $erro[2];
    }
    */
?>