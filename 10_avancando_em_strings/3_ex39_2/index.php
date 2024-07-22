<?php

    /*
    Exercício 39

Crie uma função que receba características de algum objeto como argumento (carro, sofá, cafeteira), em um array associativo;
O array deve conter nome => preço;
Retorne apenas os itens que custam mais que R$10;
Imprima o retorno;

    */

    function itensMaioresQ($itens) {
        $recbCompara = [];
        $chaves = array_keys($itens);

        for ($item = 0; $item < count($chaves); $item++) {
            $chave = $chaves[$item]; // Obtém a chave atual usando o índice do loop

            if ($itens[$chave] > 10) { // Verifica se o valor associado à chave é maior que 10, $itens[$chave] acessa o valor correspondente à chave atual

             $recbCompara[$chave] = $itens[$chave]; // Adiciona a chave e o valor ao array $recbCompara se a condição for verdadeira, $recbCompara[$chave] = $itens[$chave] armazena o par chave-valor
            }
        }
        return $recbCompara;
    }

    $precos = [
        'Carro' => 5000,
        'Sofa' => 200,
        'Cafeteira' => 100,
        'Banana' => 5,
        'Maçã' => 8,
        'Computador' => 3000
    ];

    $compras = itensMaioresQ($precos);
    print_r($compras);

?>