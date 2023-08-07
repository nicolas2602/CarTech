<?php
    // Script para comunicar com o Banco de Dados MySQL.
    // Teste Conexão.
    
    $servername = "db";
    $username = "root";
    $password = "1234";
    $erroConexao = 0;
    // Create connection

    try {
        $conexao = mysqli_connect($servername, $username, $password);
    } catch (\Throwable $th) {
        $conexao = false;
        $erroConexao = 1;
    }

?> 

<script>
    let erroConexao = <?= $erroConexao; ?>;
    console.log(erroConexao);
    if(erroConexao == 0){
        window.location.href =  "./InicioSessao.php";
    }
    else{
        window.location.href =  "./OffLineServer.php";
    }

</script>




