<?php
 //Eu
    $arr = [];

    for($i = 10; $i <= 20; $i++){
        
        array_push($arr, $i);

        if($i % 2 == 1) {

            print($i . "<br>");
        }
    }

?>