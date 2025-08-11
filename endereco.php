<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" type="image/png" href="../aula/icones/favicon.png" />
    <title>e-Tech</title>
</head>

<body class="bodyendereco">
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
                <li><a href="../aula/paginas_produtos/computadores.html">Computadores</a></li>
                <li><a href="../aula/paginas_produtos/hardwares.html">Hardwares</a></li>
                <li><a href="../aula/paginas_produtos/celulares.html">Celulares</a></li>
                <li><a href="../aula/paginas_produtos/tablets.html">Tablets</a></li>
                <li><a href="../aula/paginas_produtos/fones.html">Fones</a></li>
                <li><a href="../aula/paginas_produtos/notebooks.html">Notebooks</a></li>
                <li><a href="../aula/paginas_produtos/perifericos.html">Periféricos</a></li>
                <li><a href="/aula/paginas_produtos/outros.html">Outros</a></li>
            </ul>
        </nav>
    </header>

    <div id="tudo" class="tudo">

        <h1 class="enderecotitle">Endereço</h1>

        <body>
            <!-- Barra de progresso -->
            <div class="alinhar-tudo-endereco">
                <div class="linhas-circulos-progresso-endereco">
                    <div class="circulo1endereco"></div>
                    <div class="linha1"></div>
                    <div class="circulo2endereco"></div>
                    <div class="linha2"></div>
                    <div class="circulo3endereco"></div>
                </div>
                <div class="textos-endereco">
                    <p class="txt1cart">Compra</p>
                    <p class="txt2cart">Endereço</p>
                    <p class="txt3cart">Pagamento</p>
                </div>
            </div>
            <form action=".">
                <div class="todos-inputs-endereco">
                    <div class="alinhar-txt-nome-endereco">
                        <p class="txtnomecompleto">Nome Completo</p>
                        <p class="txtcelular">Número de Celular</p>
                    </div>
                    <div class="alinhar-box-nome-endereco">
                        <input class="box-nomecompleto" type="text" required>
                        <input class="box-numerocelular" type="number" required>
                    </div>

                    <div class="alinhar-txt-cpf-email">
                        <p class="txtcpf-endereco">CPF</p>
                        <p class="txtemail-endereco">Email</p>
                    </div>
                    <div class="alinhar-box-nome-endereco">
                        <input class="box-cpf-endereco" type="number" minlength="11" maxlength="11" required>
                        <input class="box-email-endereco" type="email" required>
                    </div>
                </div>
                <p class="txt-endereco-padrao">Endereço Padrão</p>
                <input class="box-rua-endereco" type="text" placeholder="Rua ou logadouro">
                <div class="alinhar-bairro-numero">
                    <input class="box-bairro" type="text" placeholder="Bairro" required>
                    <input class="box-numero" type="number" placeholder="Número" maxlength="5" required>
                </div>
                <div class="alinhar-cidade-estado">
                    <input class="box-cidade" type="text" placeholder="Cidade" required>
                    <input class="box-estado" type="text" placeholder="Estado" required>
                </div>
                <input class="box-cep" type="number" placeholder="CEP" minlength="8" maxlength="8" required>
                <input class="botao-salvar-endereco" type="submit" value="Salvar" id="salvarEndereco" type="button">
            </form>


            <?php
            $caminho = "carrinho.json";
            $carrinho = file_exists($caminho) ? json_decode(file_get_contents($caminho), true) : [];

            $total = 0.0;

            if (empty($carrinho)) {
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

            } else {
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
        <div class='botaocomprarcarrinho'><a href='pagamento.php'>
                <button class='buttoncomprar1'>Continuar</button>
            </a></div>";

            }
            ?>

            <div class="alinhar-checkbox-endereco">
                <input type="checkbox">
                <p>Adicionar endereço secundário</p>
            </div>

        </body>