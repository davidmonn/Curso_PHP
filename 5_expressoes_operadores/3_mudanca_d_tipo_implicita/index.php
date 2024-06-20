<?php

    echo 5 / 2; // Com 2 inteiros, geramos um Flaot
    echo " = ";

    if(is_float(5/2)) { // Com isso se for um float q no caso é, aparece a o print
        echo "É Float <br> <br>";
    }

    echo 2 . 3; // Dessa forma gerou uma String
    echo " = ";

    if(is_string(5 . 2)) {
        echo "É uma String <br> <br>";
    }

    $nome = "David";
    $sobrenome = "Monteiro";

    $nomeComp = $nome ." ". $sobrenome; // Com isso contatenamos o espaco em branco com isso temos a variavel nome completo com espaco

    echo "$nomeComp";

?>