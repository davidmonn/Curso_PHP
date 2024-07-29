<?php
    /*
     Exercício 48
Crie um array com os valores: batata, maçã, pera, feijao, arroz;
Remova pera e feijao;
     */

    $arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];
    $removido1 = array_splice($arr, array_search('pera', $arr), 1);
    $removido2 = array_splice($arr, array_search('feijão', $arr), 1);

    print_r($arr);
    echo "<br> <br>";

    print_r($removido1);
    echo "<br>";
    print_r($removido2);
    echo "<br>";

?>