<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="icon" type="image/png" href="../aula/icones/favicon.png" />
    <!-- teste -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
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

    <div id="tudo" class="tudo">

    <img src="./icones/check.png" class="checkimg">
    <p class="txtcompraconcluida"><b>Compra Concluída!</b></p>
    <p class="txtobrigadoporcomprar">Obrigado por comprar em nosso site.</p>
    <a href="index.html"><input type="submit" class="bttcompraconcluida" value="Voltar para a tela inicial"></a>
    </body>
    <?php
    file_put_contents("carrinho.json", json_encode([])); //limpa o carrinho.
    ?>