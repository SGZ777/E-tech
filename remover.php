<?php
$caminho = "carrinho.json";
$carrinho = file_exists($caminho) ? json_decode(file_get_contents($caminho), true) : [];

$nome = $_GET['nome'] ?? '';

foreach ($carrinho as $i => &$item) {
    if ($item['nome'] === $nome) {
        $item['quantidade'] -= 1;

        // Se quantidade for 0, remove o item
        if ($item['quantidade'] <= 0) {
            unset($carrinho[$i]);
        }
        break;
    }
}
unset($item);

// Reorganiza os índices do array
$carrinho = array_values($carrinho);

// Salva
file_put_contents($caminho, json_encode($carrinho, JSON_PRETTY_PRINT));

header("Location: ver-carrinho.php");
exit();
?>