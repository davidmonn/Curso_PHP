<?php

    $x = 5;
    $y = "David";

    switch($x) {
        case 0:
            echo "X é igual a 0 <br>";
            break;
        case 1:
            echo "X é igual a 1";
            break;
            default:
            echo "X não é igual a nenhum dos valores mencionados <br>";
    }

    switch($y) {
        case "Diego":
            echo "Y é igual a $y <br>";
            break;
        case "David":
            echo "Y é igual a $y";
            break;
            default:
            echo "Y não é igual a nenhum dos valores mencionados <br>";
    }

?>