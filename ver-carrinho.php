<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" type="image/png" href="../icones/favicon.png" />
    <script src="carrinho.js"></script>
    <title>Carrinho</title>
</head>

<body>
<header id="header" class="header1">
    <nav class="box1" id="box1">
        <img src="logo.png">
        <div class="icones">
        <a href="#">
                    <span class="material-symbols-outlined size-20">
                        search
                    </span>
                </a>
                <a href="ver-carrinho.php">
                    <span class="material-symbols-outlined size-20">
                        shopping_cart
                    </span>
                </a>
                <a href="login.html">
                    <span class="material-symbols-outlined size-20">
                        person
                    </span>
                </a>
            </div>

    </nav>
    <nav class="box" id="box" class="header1">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="paginas_produtos/computadores.html">Computadores</a></li>
            <li><a href="paginas_produtos/hardwares.html">Hardwares</a></li>
            <li><a href="paginas_produtos/celulares.html">Celulares</a></li>
            <li><a href="paginas_produtos/tablets.html">Tablets</a></li>
            <li><a href="paginas_produtos/fones.html">Fones</a></li>
            <li><a href="paginas_produtos/notebooks.html">Notebooks</a></li>
            <li><a href="paginas_produtos/perifericos.html">Periféricos</a></li>
            <li><a href="paginas_produtos/outros.html">Outros</a></li>             
        </ul>
    </nav>
</header>



    <h1 class="carrinhotitle">Carrinho</h1>

    </head>

    <body class="body-c">
        <!-- Barra de progresso -->
     <div class="alinhar-tudo">
        <div class="linhas-circulos-progresso">
         <div class="circulo1"></div>
         <div class="linha1"></div>
         <div class="circulo2"></div>
         <div class="linha2"></div>
          <div class="circulo3"></div>
        </div>
    </div>
    <div class="textos-carrinho">
     <p class="txt1cart">Compra</p>
     <p class="txt2cart">Endereço</p>
     <p class="txt3cart">Pagamento</p>
    </div>
        <div class="linhaCompra">
            <p>Produto</p>
            <div class="separamentoCompra">
                <p>Preço</p>
                <p>Quantidade</p>
                <p>Total</p>
            </div>
        </div>
    <?php
    $caminho = "carrinho.json";
    $carrinho = file_exists($caminho) ? json_decode(file_get_contents($caminho), true) : [];

    $total = 0.0;

    if (empty($carrinho)) {
        echo "<p class='centralizartextocarrinhovazio'>Seu carrinho está vazio.</p>";
    } else {
        foreach ($carrinho as $item) {
            // Extrai apenas os números do preço (remove "R$" e formata para float)
            $precoNumerico = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
            $subtotal = $precoNumerico * $item['quantidade'];
            $total += $subtotal;

            echo "  <div class='produtocarrinho'>
                        <img src='{$item['img']}' alt='{$item['nome']}'>
                        <p class='nomeprodutoc'><strong>{$item['nome']}</strong></p>
                            <p class='precoprodutoc'>{$item['preco']}</p>
                                <div class='removerquantidade'>
                                    <a class='tirarefeito' href='remover.php?nome=" . urlencode($item['nome']) . "'>-</a>
                                    <p>{$item['quantidade']}</p>
                                    <a class='tirarefeito' href='adicionarmais.php?nome=" . urlencode($item['nome']) . "'>+</a>
                                </div>
                            <p class='totalprodutoc'>R$ $subtotal</p>
                            <a class='tirarefeito excluiitem' href='apagaritem.php?nome=" . urlencode($item['nome']) . "'>X</a>
                    
                    </div>";
        }

    }
    ?>
                    


    <?php
    $caminho = "carrinho.json";
    $carrinho = file_exists($caminho) ? json_decode(file_get_contents($caminho), true) : [];

    $total = 0.0;

    if (empty($carrinho)) 
    {
            foreach ($carrinho as $item) {
            $precoNumerico = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
            $subtotal = $precoNumerico * $item['quantidade'];
            $total += $subtotal;

        }

        echo "<div class='fundoresumodacompra'>
                <div class='txtresumodacompra'><b>
                        Resumo da compra
                    </b>
                </div>
                <div class='linharesumo'></div>
                <div class='txtsubtotalresumocarrinho'>Subtotal</div>
                <div class='subtotalresumocarrinho'><b>R$ " . number_format($total, 2, ',', '.') . "</b></div>
                <div class='txtfreteresumocarrinho'>Frete</div>
                <div class='txtgratisresumocarrinho'><b>Grátis</b></div>
                <div class='cupomalinhadocarrinho'>
                    <div class='txtcupomresumocarrinho'>Cupom</div>
                    <div class='espacocupom'><input type='text' placeholder='#SEMFRETE'></div>
                </div>
                <div class='linharesumo'></div>
                <div class='txttotalcarrinho'>Total</div>
                <div class='valortotalcarrinho'><b>R$ " . number_format($total, 2, ',', '.') . "</b></div>
            </div>
            <div class='botaocomprarcarrinho'><button class='buttoncomprar2'>Carrinho vazio</button></div>";

    }
    else {
        foreach ($carrinho as $item) {
            $precoNumerico = floatval(str_replace(['R$', ','], ['', '.'], $item['preco']));
            $subtotal = $precoNumerico * $item['quantidade'];
            $total += $subtotal;

        }

        echo "<div class='fundoresumodacompra'>
                <div class='txtresumodacompra'><b>
                        Resumo da compra
                    </b>
                </div>
                <div class='linharesumo'></div>
                <div class='txtsubtotalresumocarrinho'>Subtotal</div>
                <div class='subtotalresumocarrinho'><b>R$ " . number_format($total, 2, ',', '.') . "</b></div>
                <div class='txtfreteresumocarrinho'>Frete</div>
                <div class='txtgratisresumocarrinho'><b>Grátis</b></div>
                <div class='cupomalinhadocarrinho'>
                    <div class='txtcupomresumocarrinho'>Cupom</div>
                    <div class='espacocupom'><input type='text' placeholder='#SEMFRETE'></div>
                </div>
                <div class='linharesumo'></div>
                <div class='txttotalcarrinho'>Total</div>
                <div class='valortotalcarrinho'><b>R$ " . number_format($total, 2, ',', '.') . "</b></div>
            </div>
            <div class='botaocomprarcarrinho'><a href='endereco.php'>
                    <button class='buttoncomprar1'>Continuar</button>
                </a></div>";

    }
    ?>
  
    </body>
</html>