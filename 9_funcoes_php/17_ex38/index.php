<?php

    /*
    
154. Exercício 38

Crie uma função que receba um array de itens de supermercado;
Retorne este array em forma de string, separado por vírgulas;


    */

    function mercado($itensFunc) {
        
        return implode(', ', $itensFunc);
    }

    $itens = ['maça', 'laranja', 'salgadinho', 'leite', 'bolo', 'cafe'];

    $resultMercado = mercado($itens);

    print_r($resultMercado);

?>