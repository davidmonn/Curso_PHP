<?php

    /*
    Exercício 2: Função para Verificar Número Par
    Escreva uma função chamada ehPar que receba um número como parâmetro e retorne true se o número for par e false se for ímpar.

    Depois de fazer isso, você pode criar um loop para testar a função com alguns números.
    */

    function valor($val){
        $resultado = $val % 2 == 0;
        return $resultado;
    }

    $nums = [1,2,3,4,5,6,7,8,9,10];

    foreach($nums as $num) {
        if(valor($num)) {
            echo "Par <br>";
        } else {
            echo "Impar <br>";
        }
    }


?>