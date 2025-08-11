<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" type="image/png" href="../aula/icones/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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
    <h1 class="tituloPagamento">Pagamento</h1>

    <div class="alinhar-tudo">
        <div class="linhas-circulos-progresso">
            <div class="circulo1pagamento"></div>
            <div class="linha1"></div>
            <div class="circulo2pagamento"></div>
            <div class="linha2"></div>
            <div class="circulo3pagamento"></div>
        </div>
    </div>
    <div class="textos-carrinho">
        <p class="txt1cart">Compra</p>
        <p class="txt2cart">Endereço</p>
        <p class="txt3cartPay">Pagamento</p>
    </div>


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
        </div>";
    }
    
    ?>
<div class='botaocomprarcarrinho'><a href="compraconcluida.php">
                <button class='buttoncomprar1' onclick="alert('Sua compra foi finalizada com sucesso! Obrigada por comprar na e-Tech! Para mais informações acesse seu email.')">Finalizar</button>
            </a></div>


    <div class="containerPagamento">
        <h2 class="subtitulo">Selecione o método de pagamento:</h2>

        <div class="metodo-pagamento">
            <div class="contCartoes">
                <input name="cartao" type="radio" class="input-cartoes">
                <img src="../aula/icones/cartao1.png" class="cartao">
            </div>
            <div class="contCartoes">
                <input name="cartao" type="radio" class="input-cartoes">
                <img src="../aula/icones/cartao2.png" class="cartao">
            </div>
        </div>

        <h2 class="subtitulo">Adicionar cartão</h2>
        <div class="form-container">
            <form>
                <div class="superiorCartao">
                    <div class="tipo">
                        <label for="tipoPagamento">Tipo</label><br>
                        <select id="tipoPagamento" name="tipoPagamento">
                            <option value="cred">Crédito</option>
                            <option value="deb">Débito</option>
                            <option value="pay">Paypal</option>
                        </select>
                    </div>
                    <div class="bandeira">
                        <label for="bandeira">Bandeira</label><br>
                        <select id="my-select">
                            <option data-img="icones/visa-logo.png" value="visa"></option>
                            <option class="mastercard" value="master" data-img="icones/mastercard-logo.png"></option>
                            <option value="elo" data-img="icones/elo-logo.png"></option>
                            <option value="american" data-img="icones/american-logo.png"></option>
                            <option value="hiper" data-img="icones/hipercard-logo.svg"></option>
                        </select>
                    </div>
                </div>
                <div class="dadosCartao">
                    <label for="dados">Dados do cartão</label><br>
                    <input type="text" class="input-box" placeholder="Titular">
                    <p class="asterisco">*Escrever com as mesmas abreviações do cartão</p>
                    <input type="text" placeholder="Número do cartão" class="input-box"
                        pattern="[0-9]{4}.[0-9]{4}.[0-9]{4}.[0-9]{4}" maxlength="16"><br>
                    <input type="tex" class="validade" placeholder="mm/aa" pattern="[0-9]{2}/[0-9]{2}" maxlength="5">
                    <input type="tex" placeholder="cvv" id="cvv" maxlength="3" size="3"><br>
                    <button type="button" id="botaoSalvar"
                        onclick="alert('As informações do seu cartão foram salvas com sucesso!')"
                        class="btt">Salvar</button>
                </div>
                <div class="entrega">
                    <div class="box-envio">
                        <div class="correios">
                            <input type="radio" name="envio" class="radio-entrega">
                            <img src="icones/caminhao.webp" class="caminhao">
                            <p class="legendaEnvio">Envio padrão pelo Correios</p>
                        </div>
                    </div>
                    <div class="box-envio">
                        <div class="privado">
                            <input type="radio" name="envio" class="radio-entrega">
                            <img src="icones/caixa.webp" class="caixa">
                            <p class="legendaEnvio">Envio privado</p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script>
    // Inicializa o Select2 com imagens
    $('#my-select').select2({
        templateResult: formatOption,
        templateSelection: formatOption,
        minimumResultsForSearch: -1 // oculta a barra de busca se quiser
    });

    function formatOption(option) {
        if (!option.id) return option.text; // Para o placeholder
        const img = $(option.element).data('img');
        return $('<span><img src="' + img + '" style="width:30%; vertical-align:middle; margin-right:10px;">' + option.text + '</span>');
    }
</script>
<script>
    document.getElementById("botaoSalvar").addEventListener("click", function (event) {
        event.preventDefault();
    });
</script>

</html>