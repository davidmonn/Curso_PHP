<?php

    // Condição Verdadeira (True)
    if(5 > 2) {
        echo "1 True, entrou no if <br>";
    }

    // Condição Falsa (False)
    if(5 < 2) {
        echo "2 False, não entrou no if, pois deu false <br>";
    }

    // Utilizar operador Lógico
    if(10 === 10 && 9 > 3) {
        echo "3 True, entrou no if <br>";
    }

    // Variaveis
    $a = 10;
    $b = 5;
    $c = "Deu certo, entrou no If 4";

    if($a >= $b) {
        echo $c;
    }

?>