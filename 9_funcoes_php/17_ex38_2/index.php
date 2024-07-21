<?php

    /*
    
154. Exercício 38

Crie uma função que receba um array de itens de supermercado;
Retorne este array em forma de string, separado por vírgulas;


    */

    function listaMerc($arrFunc) {
        
        $str = "Voce levou o(s) seguinte(s) iten(s) do mercado: ";

        for($ind = 0; $ind < count($arrFunc); $ind++) {
            if($ind + 1 == count($arrFunc)) {
                $str .= "$arrFunc[$ind].";
            } else {
                $str .= "$arrFunc[$ind], ";
            }
         }
         return $str;
    }

    $itens = ['Macarrao', 'Maionese', 'Arroz', 'Opel', 'Papel Toalha', 'Batata Doce'];

    $lista = listaMerc($itens);

    echo $lista;

?>