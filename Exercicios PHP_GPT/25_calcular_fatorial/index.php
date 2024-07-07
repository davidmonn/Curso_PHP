<?php

        /*
        Exercício: Função para Calcular o Fatorial de um Número
        Escreva uma função chamada calcularFatorial que receba um número inteiro como parâmetro e retorne o fatorial desse número.
        O fatorial de um número é o produto de todos os números inteiros positivos menores ou iguais a ele. Por exemplo:
        - Fatorial de 5 é 5 * 4 * 3 * 2 * 1 = 120
        - Fatorial de 3 é 3 * 2 * 1 = 6
        - Fatorial de 0 é 1 (por definição matemática)

        Dica: Use um loop para calcular o fatorial.
    */

    function calcularFatorial($num) {
        $fat = 1;
        for($i = $num; $i > 0; $i--){
            $fat *= $i;
        }
        return $fat;
    }

    echo "Teste com valor: 5 = ". calcularFatorial(5) . "<br>";
    echo "Teste com valor: 3 = ". calcularFatorial(3) . "<br>";
    echo "Teste com valor: 2 = ". calcularFatorial(2) . "<br>";
    

?>