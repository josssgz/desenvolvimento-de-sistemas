<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET</title>
</head>
<body>
    
    <h2>Cadastro</h2>

    <form action="" method="get">
        Nome: <input type="text" name="nomePessoa">
        <button type="submit">Enviar</button>
    </form>

    <?php 
        // var_dump($_GET);

        $nome = $_GET["nomePessoa"] ?? "Sem nome";
        echo "<h4>Olá $nome!</h4>";
    ?>

</body>
</html>