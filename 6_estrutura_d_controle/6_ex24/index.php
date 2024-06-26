<?php

    $nome = "David";
    $n1 = 10;
    $b = 5.2;
    $ar = [5, 2];

    if(is_int($nome)) {
        echo "1 True - É um inteiro <br>";
    } else {
        echo "1 False - Não é um inteiro <br>";
    }

    if(is_int($n1)) {
        echo "2 True - É um inteiro <br>";
    } else {
        echo "2 False - Não é um inteiro <br>";
    }

    if(is_int($b)) {
        echo "3 True - É um inteiro <br>";
    } else {
        echo "3 False - Não é um inteiro <br>";
    }
    
    if(is_int($ar)) {
        echo "4 True - É um inteiro <br>";
    } else {
        echo "4 False - Não é um inteiro <br>";
    }

?>