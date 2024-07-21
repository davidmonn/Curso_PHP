<?php

    /*
    
154. Exercício 38

Crie uma função que receba um array de itens de supermercado;
Retorne este array em forma de string, separado por vírgulas;


    */

    function mercadoList($listArr) {
        $msgList = "Você levou o(s) seguinte(s) item(ns): ";

        foreach($listArr as $indList => $itensArr) {
            if($indList + 1 == count($listArr)) {
                $msgList .= "$itensArr.";
            } else {
                $msgList .= "$itensArr, ";
            }
        }
        return $msgList;
    }

    $checkList = ['Arroz', 'Feijão', 'Batata Doce', 'Macarrão', 'Maçã'];

    echo mercadoList($checkList);

?>