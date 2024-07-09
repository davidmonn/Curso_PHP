<?php

    // FUNCAO PARA VERIFICAR PAR OU IMPAR

    function resultado($valor){
        if(is_int($valor) && $valor % 2 == 0){
            echo "Valor escolhido $valor = Par <br>";
        } else {
            echo "Valor escolhido $valor = Impar <br>";
        }

    }
    resultado(5);
    resultado(10);
    resultado(17);
    resultado(22);
?>