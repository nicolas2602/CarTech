<?php session_start(); $_SESSION["paginaPrincipal"] = "InicioSessao.php";
    require_once("./script-php/conexaoMySQL.php");

    $_SESSION["pagina"] = "";
    $valor = "";

    if(!empty($_POST)){
        if($_POST["nome"]=="edu" && $_POST["senha"]=="1234"){
            $_SESSION["paginaPrincipal"] = "Operacao.php";
        }
        else if($_POST["nome"]=="" && $_POST["senha"]==""){
            $valor = 'Em Branco';
            
        }else{
            $valor = 'Senha Incorreta';
        }
    
    }
?>
<script>
    let paginaInicial = "<?= $_SESSION["paginaPrincipal"];?>";
    if(paginaInicial == "Operacao.php"){
        window.location.href =  "Operacao.php";
    }
</script>

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

<body class="cBG-preto-cinza logBody">

    <Section class="logInicio">

        <img src="images/logo/logo2 pequeno.png" alt="Logo da CarTech" class="logImage">
        <h1 class="titulo cTxt-branco">CarTech</h1>

        <form action="" method="POST">
            <div class="cTxt-branco">

                <div class="logCampo">
                    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Segundo nome">
                </div>

                <div class="logCampo">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" name="senha" class="form-control" aria-labelledby="passwordHelpBlock">
                    <div class="">
                        Sua senha de conter 8-20 caracteres.
                    </div>
                </div>
            
                <div class="LogBotao">
                    <input type="submit" value="Iniciar Sessão">
                </div>
            </div>

        </form>

    </Section>

    <object id="Incorreto" value="<?=$valor ?>"></object>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
        
    <script>
        let element = document.getElementById('Incorreto');
        let valor = element.getAttribute('value');

        if(valor == "Senha Incorreta"){
            alert("Loggin ou senha incorreta!");
        }
        else if(valor == 'Em Branco'){
            alert("Campo em Branco!");
        }
    </script>

</body>

</html>