<?php

    /*
        Exercício 4: Função para Inverter uma String
    Escreva uma função chamada inverterString que receba uma string como parâmetro e retorne a string invertida.
    */

    function inverterString($str) {
        return strrev($str); // Usa strrev para inverter a string
    }

    $afazeres = [
        't1' => 'Acordar',
        't2' => 'Escovar os dentes',
        't3' => 'Fazer cafe',
        't4' => 'Tomar cafe',
        't5' => 'Comecar Estudos'
    ];

    foreach($afazeres as $palavras) {
        $inversao = inverterString($palavras);
        echo "$palavras: $inversao <br>";
    }



?>