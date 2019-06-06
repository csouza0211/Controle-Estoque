<?php


$produtos = [];

$produtos[] = [
    "nome" => "Camiseta Vingadores",
    "preco" => 50.99,
    "estoque" => 100,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Camiseta  DC",
    "preco" => 29.99,
    "estoque" => 200,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Calça Jeans",
    "preco" => 99.99,
    "estoque" => 5,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Blusa Moleton",
    "preco" => 150.99,
    "estoque" => 30,
    "min" => 20,
    "status" => true
];

$produtos[] = [
    "nome" => "Cuecas",
    "preco" => 29.99,
    "estoque" => 32,
    "min" => 20,
    "status" => false
];


function totalProduto($produtoPreco, $produtoEstoque)
{
    $total = $produtoPreco * $produtoEstoque;
    return $total;
}

function totalEstoque()
{
    global $produtos;
    $soma = 0;

    foreach ($produtos as $indice => $produto) {
        $soma = $soma + totalProduto($produto['preco'], $produto['estoque']);
    }
    return $soma;
}


// var_dump($produtos);
