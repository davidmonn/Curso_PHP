<?php

    $x = 10;
    $y =& $x;

    echo "$x <br>";
    echo "$y <br>";

    echo "Atribuicao apos Ref <br>";

    $y = 20;
    echo "$x <br>";
    echo "$y <br>";

    // Tambem vale para String
    $n = "Teste de String";
    $nome =& $n;

    echo "$n <br>";
    echo "$nome <br>";
    echo "<br>";

    echo "Mudando Ref String <br>";
    $nome = "David";
    echo "$n <br>";
    echo "$nome";

?>