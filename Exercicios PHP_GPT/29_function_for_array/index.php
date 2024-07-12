<?php

    function contagemStrings($cont) {
        $result = [];

        foreach($cont as $string){
            if(strlen($string) > 5) {
                $result[] = $string;
            }
        }
        return $result;
    }

    $strin = ['David', 'Tita', 'Toninha', 'Arroz', 'Feijao', 'Chocolate'];

    $end = contagemStrings($strin);

    print_r($end);

?>