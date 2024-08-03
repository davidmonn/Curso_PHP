<?php

    /*
    Exercício:
Crie um script em PHP que:

Defina um array com alguns números inteiros.
Use a função array_sum() para calcular a soma dos elementos desse array.
Exiba a soma dos elementos na tela.
    */

    $arr = [2,5,6,8,7,11,15,48,62];
    $soma = array_sum($arr);

    print_r($soma);
    echo "<br>";

?>