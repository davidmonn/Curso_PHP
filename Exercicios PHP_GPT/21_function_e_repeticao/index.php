<?php
    /*
    Exercício 3: Função para Calcular a Média de um Array
    Enunciado:
    Escreva uma função chamada calcularMedia que receba um array de números como parâmetro e retorne a média desses números.

    Depois de fazer isso, você pode testar a função com um array de números.
    */

    function calcularMedia($numeros) {
        $soma = 0;
        $quantidade = count($numeros);
    
        foreach ($numeros as $numero) {
            $soma += $numero;
        }
    
        $media = $soma / $quantidade;
        return $media;
    }
    
    $nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $media = calcularMedia($nums);
    echo "A média dos números é: $media";

?>