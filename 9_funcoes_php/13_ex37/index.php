<?php
    function sumEvenNumbers($n) {
        $nF = 0;
        
        for($iFunc = 0; $iFunc < count($n); $iFunc++) {
            if($n[$iFunc] % 2 == 0) {
                $nF += $n[$iFunc];
            }
        }
        return $nF;
    }
    
    $numeros = [];
    
    for($i = 0; $i <= 25; $i++) {
        array_push($numeros, $i);
    }
    
    $final = sumEvenNumbers($numeros);
    
    print_r($final);

?>