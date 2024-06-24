<?php

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    if($a > $b) {
        echo "A é maior que B 1 (1)<br>";
    }
    if($b > $a) {
        echo "A é maior que B 1 (2)<br>";
    }

    if($d >= $c) {
        echo "D é maior ou igual a C 2 (1)<br>";
    }

    if($d >= $a) {
        echo "D é maior ou igual a A <br>";
    }

?>