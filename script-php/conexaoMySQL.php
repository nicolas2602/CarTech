<div style="display: none;">
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

    // Script para direcionar para pagina OffLineServer, caso não haja conexão
    // caso não haja conexão e se já não tever direcionado.

    let erroConexao = <?= $erroConexao; ?>;
    let pagina = "<?= $_SESSION["paginaPrincipal"]; ?>";

    console.log(pagina);
    if(erroConexao == 1 && pagina != "OffLineServer.php"){
        window.location.href =  "./OffLineServer.php";
    }

</script>
</div>



