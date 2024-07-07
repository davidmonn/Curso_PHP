<?php
    /*
    Exercício 1: Função para Somar Dois Números
    Escreva uma função chamada soma que receba dois números como parâmetros e retorne a soma desses números.
    */

    function soma($val1, $val2, $val3) {
        $resultado = $val1 + $val2 + $val3;
        return $resultado;
    }

    echo "A soma dos valores é:" . soma(5, 10, 15);

?>