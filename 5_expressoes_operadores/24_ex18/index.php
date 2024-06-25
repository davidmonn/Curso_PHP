<?php

    $a = 12;
    $b = 5;
    $c = 1;
    $d = 51;
    $e = 20;
    $f = 31;
    $nome = "João";

    if($a < $b || $nome === "João") {
        echo "Operador 1 True <br>";
    }

    if($c > $b || $c) {
        echo "Operador 2 True <br>";
    }

    if($e === "20" && $d >= $f) {
        echo "Operador 3 False <br>";
    }

?>