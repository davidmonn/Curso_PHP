<?php
    
    /*
    1 - Crie uma função chamada countVowels que recebe uma string como parâmetro.
    2 - A função deve retornar a quantidade de vogais presentes na string.
    3 - Utilize uma estrutura de repetição para percorrer cada caractere da string.
    4 - Utilize uma variável para armazenar o contador de vogais.
    5 - Considere que as vogais são as letras "a", "e", "i", "o" e "u", em minúsculas ou maiúsculas.

    */

    /*
    function countVowels($str) {
        $contVog = 0;
        $vogais = ["a", "e", "i", "o", "u"];
        
        for($i = 0; $i < strlen($str); $i++) {
            $filt = strtolower($str[$i]);
            if(in_array($filt, $vogais)) {
                $contVog++;
            }
        }
        return $contVog;
    }
        
        $text = 'testando function';
        
        $resultado = countVowels($text);
        
        print_r($resultado);
        */

        function countVowels($str) {
            $contVog = 0;
            $vogais = ["a", "e", "i", "o", "u"];

            foreach(str_split($str) as $ind) {
                if(in_array(strtolower($ind), $vogais)){
                    $contVog++;
                }
            }
            return $contVog;
        }
    

    $text = 'Testeando function';

    $result = countVowels($text);

    print_r($result);

?>