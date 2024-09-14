<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // Verifica a conexao
    if($conn->connect_error) {
        die("Falha na conexao: ". $conn->connect_error);
    }

    // Inicio TESTE

    $nome = "David-Teste";
    $sobrenome = "Monteiro";
    $idade = 27;
    $email = "teste@teste.com";
    $hobbies = "TESTE-PHP-INSERT PREPARE";

    $stmt = $conn->prepare("INSERT INTO teste2(nome,sobrenome,idade,email,hobbies) VALUES(?,?,?,?,?)");

    $stmt ->bind_param("ssiss", $nome,$sobrenome,$idade,$email,$hobbies);

    if($stmt->execute()) {
        echo "Informacoes salvas com sucesso <br>";
    } else {
        if($stmt->errno == 1062) {
            echo "Este email ja existe <br>";
        } else {
            echo "Erro ao salvar as informacoes: ". $stmt->error;
        }
    }

    $conn->close();

    //$stmt->execute();

    /*if($nome == "SELECT email FROM teste2") {    // MANEIRA ERRADA QUE TENTEI
        echo "Este email ja existe, por favor escolha outro <br>";
    } else {
        echo "Informacoes salvas com sucesso <br>";
    }*/

?>