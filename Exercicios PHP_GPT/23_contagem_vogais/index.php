<?php

    /*
    Exercício 5: Função para Contar Vogais
    Escreva uma função chamada contarVogais que receba uma string como parâmetro e retorne o número de vogais (a, e, i, o, u) na string.
    */

    function contarVogais($str) {
        $vogais = ['a', 'e', 'i', 'o', 'u']; // Array contendo as vogais
        $contador = 0;
    
        // Percorre cada caractere da string
        for ($i = 0; $i < strlen($str); $i++) {
            $caractere = strtolower($str[$i]); // Converte para minúsculo para facilitar a comparação
            if (in_array($caractere, $vogais)) {
                $contador++;
            }
        }
    
        return $contador;
    }
    
    // Testando a função
    $frase = "Olá mundo!";
    echo "Número de vogais na frase '$frase': " . contarVogais($frase);



?>