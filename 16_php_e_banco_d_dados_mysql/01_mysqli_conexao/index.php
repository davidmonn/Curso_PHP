<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    /*$conn = new mysqli("localhost", "root", "","cursophp");*/
    // OU podemos fazer tambem com uso de variaveis, da seguinte forma:

    $conn = new mysqli($host, $user,$pass, $db)
    
?>