<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    //$conn = new PDO("mysql:host=localhost;dbname=cursophp", $user, $pass);
    $conn = new PDO("mysql:host=$host;dbname=$db;", $user,$pass);

?>