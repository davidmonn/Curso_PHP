<?php

    $arr = [];

    for($i = 0; $i <= 30; $i++){

        array_push($arr, $i);

    }

    //print_r($arr)

    function arrayMaiorSet($valor){

        $retorn = [];

        for($j = 0; $j < count($valor); $j++)

        if($valor[$j] > 7){
            
            array_push($retorn, $valor[$j]);

        }

        return $retorn;

    }

    $new = arrayMaiorSet($arr);
    
    print_r($new);

?>