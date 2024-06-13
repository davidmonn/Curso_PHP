<?php

    echo                            "Testando espaco em branco <br>"; // Funciona

    echo "Testando espaco <br>"                        ; // Funciona

    echo
    "Quebra de linha <br>"
    ; //Funciona

    echo "Quebra de linha <br>"
    ; // Funciona
    
    echo
    "Quebr
    a de linha <br>"
    ; // Funciona

    /*
    ec
    ho
    "Quebra de linha <br>"
    ; NÃO FUNCIONA, não pode quebrar a função
    */
?>