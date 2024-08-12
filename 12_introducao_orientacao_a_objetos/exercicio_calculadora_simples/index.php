<?php

    /*
    Calculadora Simples
Crie uma classe chamada Calculadora que tenha os seguintes métodos:
somar(a, b): recebe dois números como parâmetros e retorna a soma deles.
subtrair(a, b): recebe dois números como parâmetros e retorna a subtração do segundo número do primeiro.
multiplicar(a, b): recebe dois números como parâmetros e retorna a multiplicação deles.
dividir(a, b): recebe dois números como parâmetros e retorna a divisão do primeiro número pelo segundo.
    */

    class Calculadora {
        function somar($a,$b) {
            return "O resultado é: " . ($a + $b) . "<br>";
        }
    
        function subtrair($a,$b) {
            return "O resultado é: " . ($a - $b) . "<br>";
        }
    
        function multiplicar($a,$b) {
            return "O resultado é: " . ($a * $b) . "<br>";
        }
    
        function dividir($a,$b) {
            return "O resultado é: " . ($a / $b) . "<br>";
        }
    }

    $calculadora = new Calculadora;

    echo $calculadora->somar(5,8);
    echo $calculadora->subtrair(5,5);
    echo $calculadora->multiplicar(5,5);
    echo $calculadora->dividir(2,5);

?>