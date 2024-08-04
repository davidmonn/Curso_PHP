<?php

    function maiorElemento($arr) {
        $recbComp = 0;
        
        for($ind = 0; $ind < count($arr); $ind++) {
            $check = $arr[$ind];
            if($arr[$ind] > $check) {
                $recbComp++;
            }
        }
        return $recbComp;
    }
    
    $valores = [1,15,12,11,55,27];
    $resultado = maiorElemento($valores);
    
    print_r($resultado);