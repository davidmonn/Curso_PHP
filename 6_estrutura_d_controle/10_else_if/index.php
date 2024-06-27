<?php

    if(10 > 5) {
        echo "(1) Entrou no if <br>";
    } else if(10 > 6) {
        echo "(1) Entrou no else if <br>";
    }

    if(10 < 5) {
        echo "(2) Entrou no if <br>";
    } else if(10 > 6) {
        echo "(2) Entrou no else if <br>";
    }

    if(10 < 5) {
        echo "(3) Entrou no if <br>";
    } else if(10 < 6) {
        echo "(3) Entrou no else if <br>";
    } else {
        echo "(3) Entrou no else <br>";
    }

    if(10 < 5) {
        echo "(4) Entrou no if <br>";
    } else if(10 > 6) {
        echo "(4) Entrou no else if <br>";
    } else if (11 > 1){
        echo "(4)Entrou no else if <br>";
    }else {
        echo "(4) Entrou no else";
    }

?>