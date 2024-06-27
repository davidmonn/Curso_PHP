<?php

    $a = 12;
    $b = 89;
    $c = "teste";
    $msg = "É um numero <br>";
    $msg2 = "Numero é maior que 100 <br>";
    $msg3 = "Numero menor que 100 <br>";

    if(is_int($a) || is_float($a)) {

        $multi = $a * 2;

        if($multi > 100) {
            echo $msg2;
        } else {
            echo $msg3;
        }

    } else {
        echo "Não é um numero <br>";
    }

    if(is_int($a) || is_float($a)) {

        $multi = $b * 2;

        if($multi > 100) {
            echo $msg2;
        } else {
            echo $msg3;
        }

    } else {
        echo "Não é um numero <br>";
    }

?>