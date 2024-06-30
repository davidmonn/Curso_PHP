<?php
function calcularDesconto($valor, $categoria) {
    if ($categoria == "eletrônicos") {
        $desconto = 0.10;
    } elseif ($categoria == "vestuário") {
        $desconto = 0.20;
    } elseif ($categoria == "alimentos") {
        $desconto = 0.05;
    } else {
        $desconto = 0.00;
    }

    $valorComDesconto = $valor - ($valor * $desconto);
    return $valorComDesconto;
}

// Exemplo de uso da função
$valorProduto = 100; // Valor do produto em reais
$categoriaProduto = "vestuário"; // Categoria do produto

$valorFinal = calcularDesconto($valorProduto, $categoriaProduto);
echo "O valor final do produto com desconto é: R$ " . $valorFinal;
?>