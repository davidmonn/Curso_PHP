<?php

    function somaSeis($arrSoma) {
        $total = 0;

        for($i = 0; $i < count($arrSoma); $i++) {

            $total = $arrSoma[$i] + 6;

            if($total > 30 ) {
                echo "Número $total é muito alto <br>";

            } else {
                echo "$total <br>";
            }

        }
        return $total;
    }

    $n = range(1,45);
    $res = somaSeis($n);
    print_r($res);

?>