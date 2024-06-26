<?php

    $idade1 = 17;
    $idade2 = 27;
    $idade3 = 18;
    $maiorI = 18;

    if($idade1 >= $maiorI) {
        echo "Acesso Permitido";
    }
    else{
        echo "(1) Acesso NEGADO <br>";
    }

    if($idade2 >= $maiorI){
        echo "(2) Acesso Autorizado <br>";
    }

    if($idade3 >= $maiorI) {
        echo "(3) Acesso Autorizado <br>";
    }

?>