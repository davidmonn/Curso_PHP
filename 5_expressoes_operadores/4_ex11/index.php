<?php

    $a = "5" * 12;

    // echo "$a = "; Podemos fazer tambem da seguinte forma:

    echo $a . " = ";

    if(is_string($a)) {
        echo "É uma Sting <br>";
    }

    if(is_int($a)) {
        echo "É um Inteiro <br>";
    }

    if(is_float($a)) {
        echo "É um Float <br>";
    }

    if(is_bool($a)) {
        echo "É um Booleano <br>";
    }

    echo gettype($a) . " = Integer inteiro <br>";
    echo gettype([]) . " = Array [] <br>";
    echo gettype(12.5) . " =  Double é outro nome para Float <br>";
    echo gettype(false) . " = Booleano true/false <br>";
    echo gettype("string") . " = String Texto<br>";
?>