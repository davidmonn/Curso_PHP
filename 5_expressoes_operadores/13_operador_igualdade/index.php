<?php

    if(3 == 3){
        echo "Comparação verdadeira 1<br>";
    }

    if(3 == 4){
        echo "Comparação verdadeira 2<br>";
    }

    $a = 12;
    $b = 12;
    $c = 100;

    if($a == $b){
        echo "Comparação verdadeira 3<br>";
    }

    if($a == $c){
        echo "Comparação verdadeira 4<br>";
    }

    $nome1 = "David";
    $nomeDoSistema = "David";
    $nome3 = "Davi";

    if($nome1 == $nomeDoSistema){
        echo "O nome coincide 5<br>";
    }

    if($nome1 == $nome3){
        echo "O nome coincide 6<br>";
    }

?>