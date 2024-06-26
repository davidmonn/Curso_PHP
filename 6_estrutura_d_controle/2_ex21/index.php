<?php

    $n1 = 5;
    $n2 = 2;
    $nome = "Mateus";
    $nome2 = "Pedro";
    $n3 = 12;
    $n4 = 11;

    if($n1 > $n2) {
        echo "(1) " .$n1 . " > ". $n2 . " = True <br>";
    }

    echo "(1) " .$n1 > $n2 ? "$n1 > $n2 True <br>" : "$n1 > $n2 False <br>";

    if($nome != $nome2) {
        echo "(2) Verdadeiro ". $nome . " é diferente de " . $nome2 . "<br>";
    }

    echo $nome != $nome2 ? "True = " . $nome . " é diferente de " . $nome2 . "<br>" : "False";

    if($n3 <= $n4) {
        echo "$n3 <= $n4 = False";
    }
    else {
        echo "(3) " ."$n3 < $n4 = True";
    }

?>