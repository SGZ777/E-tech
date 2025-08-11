<?php
session_start();


function adicionarAoCarrinho($id, $nome, $preco, $quantidade){
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

// Se já existe o produto, soma quantidade
    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade'] += $quantidade;
    } else {
        $_SESSION['carrinho'][$id] = [
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => $quantidade,
        ];
    }
}
// função para remover produto do carrinho
function removerDoCarrinho($id) {
    if (isset($_SESSION['carrinho'][$id])) {
        unset($_SESSION['carrinho'][$id]);
    }
}
// altera a quantidade de itens no carrinho
function atualizarQuantidade($id, $quantidade){
    if (isset($_SESSION['carrinho'][$id])) {
        if ($quantidade <= 0) {
            removerDoCarrinho($id);
        } else {
            $_SESSION['carrinho'][$id]['quantidade'] = $quantidade;
        }
    }
}
// funcão para calcular o valor total do carrinho
function calcularTotal(){
    $total = 0;
    if (isset($_SESSION['carrinho'])) {
        foreach ($_SESSION['carrinho'] as $item) {
            $total += $item['preco'] * $item['quantidade'];
        }
    }
    return $total;
}
?>