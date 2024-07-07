<?php

    /*
        Exercício: Função para Verificar se um Número é Positivo, Negativo ou Zero
        Escreva uma função chamada verificarNumero que receba um número como parâmetro e retorne uma mensagem indicando se o número é positivo, negativo ou zero.
        Por exemplo:
        - Se o número for positivo, retorne "Número positivo".
        - Se o número for negativo, retorne "Número negativo".
        - Se o número for zero, retorne "Número zero".
    */

    function verificarNumero($valor){
        if($valor > 0) {
            return "Número positivo = $valor <br>" ;

        } else if($valor < 0) {
            return "Valor negativo = $valor <br>";

        } else {
            return "Número zero = $valor <br>";
        }
    };

    echo "Verificacao 01: " . verificarNumero(10) . "<br>";
    echo "Verificacao 02: " . verificarNumero(-10) . "<br>";
    echo "Verificacao 03: " . verificarNumero(0) . "<br>";


?>