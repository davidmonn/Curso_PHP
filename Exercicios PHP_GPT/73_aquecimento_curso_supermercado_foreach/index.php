<?php

    /*
    
154. Exercício 38

Crie uma função que receba um array de itens de supermercado;
Retorne este array em forma de string, separado por vírgulas;


    */

    function listMercado($produtos) {
        $msg = "Seu(s) produto(s): ";

        foreach($produtos as $list => $item) {
            if($list + 1 == count($produtos)) {
                $msg .= "$item.";
            } else {
                $msg .= "$item, ";
            }
        }
        return $msg;
    }

    $arrCompras = ['Macarrão', 'Melancia', 'Leite', 'Arroz', 'Feijão', 'Frango'];

    $listaMercado = listMercado($arrCompras);

    print_r($listaMercado);

?>