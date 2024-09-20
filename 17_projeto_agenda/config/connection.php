<!-- AQUI IRA FICAR UNICAMENTE PARA NOSSA CONEXAO COM O BANCO DE DADOS -->
<?php

    $host = "localhost";
    $db = "agenda";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão estabelecida com sucesso <br>";
    } catch(PDOException $e) {
        echo "Erro na conexão com banco de dados: " . $e->getMessage() . "<br>";
    }

?>