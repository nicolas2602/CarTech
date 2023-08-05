<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        object{
            height: 100vh;
        }
    </style>

    <form action="">
        <input onclick="cadastro('pagina')" type="radio" id="link1" name="t">
        <label for="link1">Link1</label>

        <input onclick="manutencao('pagina')" type="radio" id="link2" name="t">
        <label for="link2">Link2</label>

        <input onclick="manutencao2('pagina')" type="radio" id="link3" name="t">
        <label for="link3">Link3</label>
    </form>

    <div id="pagina" style="width:100%;">

    </div>


    <!-- type="text/javascript" -->
    <!-- module -->
    <script src="./cadastroPag.js" type="text/javascript"></script>


</body>
</html>