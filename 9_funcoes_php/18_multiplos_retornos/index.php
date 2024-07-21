<?php

    function alteraDados($nome, $idade) {

        $nome = "Sr . $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados('David', 27);

    print_r($dados);
    echo  "<br>";
    echo  "<br>";

    echo "Ola $dados[0], voce tem $dados[1]";

?>