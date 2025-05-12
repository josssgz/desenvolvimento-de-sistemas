<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário GET</title>
</head>
<body>
    
    <h2>Soma</h2>

    <form action="" method="get">
        Número 1: <input type="number" name="n1">
        <br>Número 2: <input type="number" name="n2">
        <br><button type="submit">Calcular</button>
    </form>

    <?php 
        // var_dump($_GET);
        $n1 = $_GET["n1"] ?? 5;
        $n2 = $_GET["n2"] ?? 1;

        $soma = $n1 + $n2;
        echo "<br>Resultado: $n1 + $n2 = $soma";
    ?>

</body>
</html>