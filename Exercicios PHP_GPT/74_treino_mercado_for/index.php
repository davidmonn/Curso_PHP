<?php

    /*
    154. Exercício 38

    Crie uma função que receba um array de itens de supermercado;
    Retorne este array em forma de string, separado por vírgulas;

    */

    function mercadoList($produtos) {
        $msg = "Seu(s) produto(s): ";

        for($list = 0; $list < count($produtos); $list++) {
            if($list +1 == count($produtos)) {
                $msg .= "$produtos[$list].";
            } else {
                $msg .= "$produtos[$list], ";
            }
        }
        return $msg;
    }

    $lista = ['Arroz', 'Feijão', 'Frango', 'Banana', 'Suco de Uva', 'Salgadinho'];

    $result = mercadoList($lista);

    print_r($result);

?>