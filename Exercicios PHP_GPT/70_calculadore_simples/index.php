<?php

    function calculadora($n1, $n2, $operador) {
        switch($operador) {
            case '+':
            return $n1 + $n2;
            case '-':
            return $n1 - $n2;
            case '*':
            return $n1 * $n2;
            case '/':
                if($n2 != 0) {
                    return $n1 / $n2;
                } else {
                    return "Erro: divisão por zero.";
                }
            default: 
            return "Operador Invalido.";
        }
    }

    echo calculadora(5,2, '+') . "<br>";
    echo calculadora(5, 2, '-'). "<br>";
    echo calculadora(5, 2, '*') . "<br>";
    echo calculadora(5, 2, '/') . "<br>";
    echo calculadora(5, 10, '%') . "<br>";

?>