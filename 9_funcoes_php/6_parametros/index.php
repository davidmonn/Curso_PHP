<?php

    function velocidadeMaxima($vel){
        
        if(is_int($vel) || is_float($vel)){
        echo "O carro atinge as velocidade de $vel km/h <br>";
    } else {
        echo "Por favor passe um valor inteiro ou float. <br>";
    }

    }

    velocidadeMaxima(50);
    velocidadeMaxima(80);
    velocidadeMaxima(150);

    //Nao pode usar function com parametros, sem parametro.
    //velocidadeMaxima();

    echo "Continuando <br>";

    $velocidade = 200;

    velocidadeMaxima($velocidade);

    //PHP, ignora parametro desnecessario.

    velocidadeMaxima(25, "Teste");
    velocidadeMaxima("Teste");

    function descreverAnimal($nome, $raca) {

        echo "O $nome é um $raca <br>";
    }

    descreverAnimal("Bob", "cachorro");

?>