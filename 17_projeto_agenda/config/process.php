<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $id;

    if(!empty($_GET)) {
        $id = $_GET['id'];
    }

    // RETORNA O DADO DE UM CONTATO

    if(!empty($id)) {
        $query = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id); // ID q veio do GET
        $stmt->execute();

        $contact = $stmt->fetch();
        
    } else {
        // RETORNA TODOS OS CONTATOS
        $contacts = [];

        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $contacts = $stmt->fetchAll();
    }

    /* JEITO Q EU TINHA FEITO PARA TESTE
    //RETORNA TODOS OS CONTATOS
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
    */
?>