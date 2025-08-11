<?php
// Lê o carrinho atual (ou cria um novo)
$caminho = "carrinho.json";
$carrinho = file_exists($caminho) ? json_decode(file_get_contents($caminho), true) : [];

$nome = $_POST['nome'] ?? 'Sem nome';
$preco = $_POST['preco'] ?? 'R$ 0,00';
$img = $_POST['img'] ?? '';

// Verifica se já tem o item no carrinho
$achou = false;
foreach ($carrinho as &$item) {
    if ($item['nome'] === $nome) {
        $item['quantidade'] += 1;
        $achou = true;
        break;
    }
}
unset($item);

// Se não achou, adiciona novo item
if (!$achou) {
    $carrinho[] = [
        "nome" => $nome,
        "preco" => $preco,
        "img" => $img,
        "quantidade" => 1
    ];
}

// Salva o novo carrinho
file_put_contents($caminho, json_encode($carrinho, JSON_PRETTY_PRINT));

// Volta para a página inicial
header("Location: ver-carrinho.php");
exit();
?>