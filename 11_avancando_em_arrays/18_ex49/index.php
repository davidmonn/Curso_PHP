<?php

    /*
    Exercício 49
Crie variáveis com característica de algum objeto ou animal;
Depois crie um array com compact com estas mesmas variáveis;
Faça um loop no array e imprima os valores;
    */

    $marca = "Dell";
    $cor = "preto";
    $teclado = "rgb";
    $processador = "i5";
    $placa = "Placa de video rtx 3050";

    $notebook = compact('marca', 'cor', 'teclado', 'processador', 'placa');
    
    $count = count($notebook);
    $index = 0;

    foreach($notebook as $valores) {
        echo $valores;
        $index++;
        if($index < $count) {
            echo " - ";
        }
    }

?>