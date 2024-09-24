<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //MODIFICACOES NO BANCO
    if(!empty($data)) {
    
        // Criar contato

        if($data["type"] === "create") {
            $name = $data["name"];
            $phone = $data["phone"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts(name, phone, observations) VALUES(:name, :phone, :observations)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
            } catch(PDOException $e) {
                $erro = $e->getMessage();
                echo "Erro: $erro";
            }

            // ATUALIZAR CONTATO
        } else if($data["type"] === "edit") {
            $name = $data["name"]; // Pegar todos os dados novamente
            $phone = $data["phone"];
            $observations = $data["observations"];
            $id = $data["id"]; // Usado para saber qual dados iremos atualizar

            $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Dados atualizados com sucesso!";
            } catch(PDOException $e) {
                $_SESSION["msg"] = "Erro ao atualizar dados, não pode haver numeros iguais.";
            }

        }

        // REDIRECIONAR PARA HOME
        header("Location: " . $BASE_URL . "../index.php");

    //SELECAO DE DADOS
    } else {
        $id;

        if(!empty($_GET)) {
            $id = $_GET["id"];
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
    }

    // FECHAR CONEXAO

    $conn = null; // Como em PDO nao temos um metodo close, podemos usar dessa forma.

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