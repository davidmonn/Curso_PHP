<?php

    /*
    Exercício: Calculadora de Tipos de Imóveis
Crie uma função chamada calcularPreco que recebe dois parâmetros: o tipo de imóvel e a quantidade de metros quadrados. A função deve calcular o preço com base no tipo de imóvel e na área:
    */

    function calcImoveis($local, $metros) {
        switch($local) {
            case 'apartamento':
                return "Apartamento 2000 por metro quadrado = " . 2000* $metros . "<br>";
            case 'casa':
                return "Casa 3000 por metro quadrado = " . 3000 * $metros . "<br>";
            case 'cobertura':
                return "Cobertura 5000 por metro quadrado = " . 5000 * $metros . "<br>";
            case 'loja':
                return "Loja 4000 por metro quadrado = ". 4000 * $metros . "<br>";
            default:
                return "Tipo de imovel invalido <br>";
        }
    }

    echo "Seja bem vindo, escolha uma das opções: apartamento, casa, cobertura, loja. <br>";

    echo calcImoveis('apartamento', 1);
    echo calcImoveis('casa', 3);
    echo calcImoveis('cobertura', 2);
    echo calcImoveis('loja', 5);

?>