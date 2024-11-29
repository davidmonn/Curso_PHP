<?php

  $db_host = "localhost";
  $db_name = "testcont";
  $db_user = "root";
  $db_pass = "";

  try {

   $conn = new PDO("mysql:db_name=" . $db_name . ";db_host=" . $db_host . $db_user . $db_pass);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Conexão estabelecida com sucesso <br>";
   //$conn->getAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  } catch(PDOException $e) {
    $erro = $e->getMessage();
    echo "Falha na conexão, erro: $e";
  }

?>