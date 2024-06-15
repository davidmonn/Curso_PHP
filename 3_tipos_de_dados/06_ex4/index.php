<?php

    $n1 = 1.5;
    $n2 = 2.5;
    $n3 = 3.5;
    $n4 = "Nao e float";
    $n5 = -15.5;

    if(is_float($n1)) {
        echo "Numero 1 - Float <br>";
    }

    if(is_float($n2)) {
        echo "Numero 2 - Float <br>";
    }

    if(is_float($n3)) {
        echo "Numero 3 - Float <br>";
    }

    if(is_float($n4)) {
        echo "Não é Float <br>";
    }

    else {
        echo "Não é Float <br>";
    }

    if(is_float($n5)) {
        echo "Sim, podemos ter floats negativos <br>";
    }

    if(is_float(5)) {
        echo "É um inteiro";
    }

?>