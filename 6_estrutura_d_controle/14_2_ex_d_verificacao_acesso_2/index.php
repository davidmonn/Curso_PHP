<?php
function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao) {
        return "Acesso autorizado";
    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } else {
        return "Acesso negado. Autorização necessária";
    }
}

// Exemplo de uso da função
$idadePessoa = 20; // Idade da pessoa
$autorizacaoPessoa = true; // Autorização de acesso

$resultadoAcesso = verificarAcesso($idadePessoa, $autorizacaoPessoa);
echo $resultadoAcesso;
?>