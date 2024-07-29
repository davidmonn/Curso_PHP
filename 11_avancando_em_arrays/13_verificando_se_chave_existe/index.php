<?php

    $usuario = [
        'nome' => 'David',
        'idade' => 27,
        'sexo' => 'Masculino',
        'profissao' => null
    ];

    if(array_key_exists('nome', $usuario)) {
        echo "A chave existe, chave: " . $usuario['nome'] . "<br>";
    } else {
        echo "Chave inexistente <br>";
    }

    if(array_key_exists('hobbie', $usuario)) {
        echo "A chave existe, chave: " . $usuario['hobbie'] . "<br>";
    } else {
       echo "Chave inexistente <br><br> ";
    }

    echo ucwords("teste com isset") . "<br> <br>";

    if(isset($usuario['idade'])) {
        echo "Chave existente, chave: " . $usuario['idade'] . "<br>";
    } else {
        echo "Chave inexistente <br>";
    }

    if(isset($usuario['profissao'])) {
        echo "Chave existente, chave: " . $usuario['profissao'] . "<br>";
    } else {
        echo "Chave inexistente <br>";
    }

    if(isset($usuario)) { // TAMBEM CHECA SE UMA VARIAVEL EXISTE
        echo "Tambem serve com variaveis <br>";
    } else {
        echo "Chave inexistente <br>";
    }

?>