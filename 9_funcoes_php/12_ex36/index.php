<?php

    function number($arrNumb){

        $valores = [];
        foreach($arrNumb as $num){
            if($num > 7){
                $valores[] = $num;
            }
        }

        return $valores;

    }

    $arrNumb = [8,9,10,11,12,13,14,15,16,17];

    $result = number($arrNumb);

    foreach($result as $valores);
    echo $valores . " ";
?>