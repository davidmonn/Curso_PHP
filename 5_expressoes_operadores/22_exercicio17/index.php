<?php

    $a = 15;
    $b = 5;
    $c = 2;
    $d = 3;

    $nom = "João";
    $nom2 = "João";
    $test = "teste";
    
    if(($a > $b) && $nom === $nom2) {
        echo "Resultado da primeira operação True <br>";
    }

    if(($test > $b) && 1) {
        echo "Resultado da segunda operação False <br>";
    }

    if(($c == $d) && 5 >= 3) {
        echo "Resultado da terceira operação False <br>";
    }

?>