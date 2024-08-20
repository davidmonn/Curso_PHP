<?php

    session_start();

    //print_r($_SESSION);
    $_SESSION['nome'] = "David";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
    <h1>Ola Session</h1>
    <p>Seja bem vindo</p>
    <div><a href="index.php">Home</a></div>
    <div><a href="teste.php">Acessar teste php</a></div>
    <div><a href="pagina.php">Acessar pagina php</a></div>
</body>
</html>