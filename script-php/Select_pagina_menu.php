<?php
    $pagina = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $pagina = $_POST["menus"];

    }
    // manter a pagina da sessão
    if(empty($pagina)){
        if($_SESSION["pagina"] == ""){
            echo "<br>";
            echo "<h1>Bem Vindo a CarTech</h1>";
            echo "<p>Navegue atraves do menu para começar.</p>";
        }
        else{
            $pagina = $_SESSION["pagina"];
        }
        // elseif($_SESSION["pagina"] == "CadastroCliente"){
        //     $name = "CadastroCliente";
        // }
        // elseif($_SESSION["pagina"] == "CadastroVeiculo"){
        //     $name = "CadastroVeiculo";
        // }
        // elseif($_SESSION["pagina"] == "CadastroManutencao"){
        //     $name = "CadastroManutencao";
        // }
        // elseif($_SESSION["pagina"] == "HistoricoManutencao"){
        //     $name = "HistoricoManutencao";
        // }
        // elseif($_SESSION["pagina"] == "Pesquisar"){
        //     $name = "Pesquisar";
        // }
        
    }

    // codigo responsavel por abrir a pagina de cada menu
    if ($pagina == "Cliente"){
        $_SESSION["pagina"] = "Cliente";
        include("./menu-php/CadastroCliente.php");
    }
    if ($pagina == "Veiculo"){
        $_SESSION["pagina"] = "Veiculo";
        include("./menu-php/CadastroVeiculo.php");
    }
    if ($pagina == "Manutenção"){
        $_SESSION["pagina"] = "Manutenção";
        include("./menu-php/CadastroManutencao.php");
    }
    if ($pagina == "Histórico"){
        $_SESSION["pagina"] = "Histórico";
        include("./menu-php/HistoricoManutencao.php");
    }
    if ($pagina == "Pesquisar"){
        $_SESSION["pagina"] = "Pesquisar";
        include("./menu-php/Pesquisar.php");
    }
    
?>