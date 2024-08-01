<?php

    $arr = ['banana', 'maca', 'pera', 'batata', 'mamao'];

    if(in_array('batata', $arr)) {
        echo "Há o item batata no array <br>";
    } else {
        echo "Não há o item selecionado <br>";
    }

    $item = 'banana';

    if(in_array($item, $arr)) {
        echo "Há o item $item <br>";
    } else {
        echo "Não ha o item selecionado";
    }

?>