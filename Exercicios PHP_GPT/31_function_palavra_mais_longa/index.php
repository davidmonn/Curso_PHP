<?php

    function palavras($palavra) {
        $indice = '';

        foreach($palavra as $ind) {
            if(strlen($ind) > strlen($indice)) {
                $indice = $ind;
            }
        }
        return $indice;
    }

    $palavrasArr = ['Isqueiro', 'Fosforo', 'Teste', 'Computador', 'Palavras'];

    $result = palavras($palavrasArr);

    print_r($result);

?>