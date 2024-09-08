<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli("localhost","Teste","teste123","cursophp");

    if($conn->connect_errno) {
        echo "Erro na conexao <br>";
        echo "Erro:" . mysqli_connect_error(); /* Com isso o PHP irá nos mostrar o erro */
        //echo "Erro:" . $conn->connect_error; /* Essa é propriedade Orientada a Objetos */
    }

?>