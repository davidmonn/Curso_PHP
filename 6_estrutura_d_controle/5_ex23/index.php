<?php

    $id1 = 22;
    $id2 = 18;
    $id3 = 16;

    $maiorI = 18;
    $msg1 = "Acesso Autorizado <br>";
    $msg2 = "Acesso NEGADO";

    echo $id1 >= $maiorI ? $msg1 : $msg2;

    if($id2 >= $maiorI) {
        echo $msg1;
    }  else {
        echo $msg2;
    }

    if($id3 >= $maiorI) {
        echo $msg1;
    } else {
        echo $msg2;
    }

?>