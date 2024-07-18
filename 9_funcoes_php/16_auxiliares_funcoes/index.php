<?php

    function soma($a, $b) {

        print_r(func_get_args()); // Mostrou os valores dos argumentos
        echo "<br>";
        echo (func_num_args()). "<br>"; // Mostrou a quantidade de argumentos

        return $a + $b;

    }

    soma(2,4)

?>