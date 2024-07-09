<?php

    function informacoes($nome, $idade){
        if(is_string($nome) && is_int($idade)){
            echo "Nome: $nome, idade:$idade <br>";

        }else {
            echo "Por favor, informar os argumentos corretamente.";
        }
    }

    function infr($name, $years){
        $info = $name . $years;
        return "Ola eu sou: $name, e tenho: $years anos";
    }

    // 1
   echo informacoes("David", 27);

   //2
   echo infr ("David", 27);

?>