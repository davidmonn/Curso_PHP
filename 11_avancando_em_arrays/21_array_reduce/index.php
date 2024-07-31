<?php

    $arr = [1,5,4,7,9,12,56,47,98,296,45,15];

    function soma($a, $b) {
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");

    echo "$resultado <br>";

?>