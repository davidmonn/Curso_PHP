<?php

    $dados = [10, "Maçã", 5, "Laranja", 8, "Banana", 15, "Abacaxi"];

    $i = 0;

    while($i < count($dados)) {

        if(is_int($dados[$i])) {
            echo $dados[$i] . "<br>";
        }

        $i++;

    }

?>