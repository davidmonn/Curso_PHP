<?php

        /*
        Exercício 3: Contagem de Strings com Mais de 5 Caracteres
    Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que têm mais de 5 caracteres.
        */

        function confStrings($verif) {
            $comp = [];

            foreach($verif as $strin) {
                if(strlen($strin) > 5) {
                    $comp[] = $strin;
                }
            }
            return $comp;
        }

        $strings = ['Computador', 'Celular', 'Telefone', 'Ramal', 'Notebook', 'Teste', 'luz'];

        $resultado = confStrings($strings);

        print_r($resultado);

?>