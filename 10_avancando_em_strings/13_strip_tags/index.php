<?php

    $textoHtml = "<p> testando paragrafo </p> <div> Uma div </div> <p> Outro paragrafo </p> <h1> testando h1</h1> <br>";

    echo $textoHtml;

    $salvarTextoBanco = strip_tags($textoHtml);

    echo $salvarTextoBanco;

?>