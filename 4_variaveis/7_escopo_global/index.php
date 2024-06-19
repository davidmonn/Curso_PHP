<?php

    $teste = "ABC";

    echo "$teste Global 1 <br>"; // ESCOPO GLOBAL

    if(true) {  // TESTE na Estrutura IF

        $teste = "CBA";
        echo "$teste if <br>";

    }
    
    echo "$teste Global 2 <br>"; // ESCOPO GLOBAL 2

    function funcao() {

        $teste = "wsws";
        echo "$teste Global 2 <br>"; // nesse caso o VS code ja nos aponta um erro por nao termo criado a variavel

    }

    funcao();

    function testandoGlobal() {

        global $teste;  // Com isso chamamos a Variavel do Escopo Global
        
        
        echo "$teste Global Funcao <br>";
    }
    testandoGlobal();
    echo "$teste Escopo Global 3";

?>