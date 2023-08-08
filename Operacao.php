<?php session_start(); $_SESSION["paginaPrincipal"] = "Operacao.php";
    require_once("./script-php/conexaoMySQL.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="icon" type="image/x-icon" href="./images/logo/logo.png">
    <title>CarTech</title>
</head>

<body class="cBG-branco">

<!-- Barra de navegação - Cabeçario -->
    <header class="header cBG-preto">

        <nav class="header-nav">

                <!-- Campo com logo do Software de Nome -->
                <div class="header-item">
                    <a class="header-logo cTxtA-branco" href="./InicioSessao.php">
                        <img src="images/logo/logo2 pequeno.png" alt="Logo da CarTech" class="img--logo">
                        CarTech
                    </a>
                </div>

                <!-- Campo de Operação e Banco de dados -->
                <div class="header-item">
                    <a class="header-link cTxtA-branco" href="#">
                        <img src="images/icone/workspaces.png" alt="Logo de Operação" class="img--link">
                        Operação
                    </a>
                    <a class="header-link cTxtA-branco" href="#">
                        <img src="images/icone/DB.png" alt="Logo do Banco de dados" class="img--link">
                        Banco de dados
                    </a>
                </div>

        </nav>
    </header>


    <Section class="principal">

        <!-- menus lateral de navegação -->

        <div class="tamanho-menu cBG-preto-cinza">
            <!-- menu do usuario -->
            <ul class="menu-usuario">
                <li class="foto-usuario">
                    <img src="images/icone/icone-pessoa.png" alt="Foto do Usuario">
                </li>
                <li class="nome-usuario cTxt-branco">
                    Nome do Usuario
                </li>
                <li class="menu-sair">
                    <button class="sair cTxt-branco cBGA-preto-cinza">Sair</button>
                </li>
            </ul>

            <hr>

            <!-- Menu de operação -->
            <form class="menu-operacao" method="post" action="">
    
                <input type="submit" id="Cliente" name="menus" value="Cliente" class="cTxt-branco cBGA-preto-cinza">

                <input type="submit" id="Veiculo" name="menus" value="Veiculo" class="cTxt-branco cBGA-preto-cinza">
                
                <input type="submit" id="Manutencao" name="menus" value="Manutenção" class="cTxt-branco cBGA-preto-cinza">

                <input type="submit" id="Historico" name="menus" value="Histórico" class="cTxt-branco cBGA-preto-cinza">

                <input type="submit" id="Pesquisar" name="menus" value="Pesquisar" class="cTxt-branco cBGA-preto-cinza">

            </form>
        </div>


        <!-- Conteudo do menu "main" -->

        <div class="main">

            <!-- teste de barra de rolagem -->
            <div> 
                <?php include("./script-php/Select_pagina_menu.php");?>
            </div>
            
        </div>

    </Section>

    <footer class="fixed-bottom mb-0 cBG-branco border-top border-black p-2">
        <div class="footer mb-0">
            <p class=".footer-p mb-0">ver: 0.5</p>
            <p class=".footer-p mb-0"> ©Copyright - Todos os direitos reservados a Eduardo e Nicolas</p>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>