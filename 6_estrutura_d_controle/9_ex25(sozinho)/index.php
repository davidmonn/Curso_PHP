<?php

    $n0 = 2;
    $n1 = 10;
    $n2 = 50;
    $n3 = 7.5;

    $msg1 = "Passou de 100 <br>";
    $msg2 = "Inferior a 100 <br>";
    $msg3 = "É um numero <br>";

    if(is_int($n0)) {
        echo $msg3;
        if($n0 * $n1 >= 100) {
            echo "(1) ".$msg1;
        } else {
            echo "(1) $n0 * $n1 = ". $n0 * $n1 ." ". $msg2;
        }
    } else {
        echo "(1) Não é um numero <br>";
    }

    echo "<br>";

    if(is_int($n2)) {
        echo $msg3;
        if($n2 * $n0 >= 100) {
            echo "$n2 * $n0 = ". $n2 * $n0 . " ". $msg1;
        } else {
            echo $msg2;
        }
    } else {
        "(2) Não é um numero <br>";
    }

?>