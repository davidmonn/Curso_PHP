<?php

    function maioresSete($valorFunc) {
        $recbVal = [];

        for($indFunc = 0; $indFunc < count($valorFunc); $indFunc++) {
            
            if($valorFunc[$indFunc] > 7) {
                array_push($recbVal, $valorFunc[$indFunc]);
            }
        }
        return $recbVal;
    }
    
    $recbVal = [];
   

    for($i = 8; $i < 30; $i++) {
        array_push($recbVal, $i);
    }

    $result = maioresSete($recbVal);
    
    print_r($result);

?>