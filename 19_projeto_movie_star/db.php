<?php
    $db_host = "localhost";
    $db_name = "moviestar";
    $db_user = "root";
    $db_pass = "";

    /* CONEXAO */
    $conn = new PDO("mysql: name=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);

    /* HABILITAR ERROS */
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Com isso se fizermos algumas besteira no banco de dados, ele ira "explodir" um erro na tela, e poderemos debugar mais rapido.

    /*
    try {
        $conn = new PDO("mysql: name=" . $db_name . ";host=" . $db_host, $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem sucedida!";
    } catch(PDOException $e) {
        $erro = $e->getMessage();
        echo "Falha na conexão: $erro";
    }
    */
?>