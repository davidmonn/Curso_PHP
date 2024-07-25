<?php

    $url = "https://www.google.com.br";
    $arrayUrl = parse_url($url);
    
    print_r($arrayUrl);
    echo "<br>";

    echo $arrayUrl["host"];
    echo "<br>";

    $url2 = "http://www.horadecodar.com.br/?busca=php";
    $arrUrl = parse_url($url2);

    print_r($arrUrl);
    echo "<br>";

    $url3 = "http://www.horadecodar.com.br/usuarios/davidmonteiro?id=12&nome=David";
    $arrUrl2 = parse_url($url3);

    print_r($arrUrl2);
    echo "<br>";


?>