<?php

    $peso1 = 55;
    $peso2 = 79.9;
    $peso3 = 80.2;
    $peso4 = 90;
    $pesoMax = 80;

    $msg1 = "Peso ideal <br>";
    $msg2 = "Acima do peso <br>";

    if($peso1 <= $pesoMax) {
        echo "1 True - " .$msg1;
    } else {
        echo "1 False - " .$msg2;
    }

    if($peso2 <= $pesoMax) {
        echo "2 True - " .$msg1;
    } else {
        echo "2 False - " .$msg2;
    }

    if($peso3 <= $pesoMax) {
        echo "3 True - " .$msg1;
    } else {
        echo "3 False - " .$msg2;
    }

    if($peso4 <= $pesoMax) {
        echo "4 True - " .$msg1;
    } else {
        echo "4 False - " .$msg2;
    }
    
?>