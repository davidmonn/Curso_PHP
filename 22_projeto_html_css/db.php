<?php


  $db_host = "localhost";
  $db_name = "testcont";
  $db_user = "root";
  $db_pass = "";

  try {
    // Corrigindo a string de conexão
    $conn = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_pass);
    
    // Definindo o modo de erro do PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão estabelecida com sucesso <br>";

  } catch(PDOException $e) {
    // Captura o erro de conexão
    echo "Falha na conexão, erro: " . $e->getMessage();
  }

?>