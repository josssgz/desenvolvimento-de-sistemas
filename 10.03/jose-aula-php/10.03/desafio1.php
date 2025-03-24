<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
    
    <h2>Média de Notas</h2>

    <?php 
    $nota1 = 8;
    $nota2 = 7;
    $media = ($nota1 + $nota2) / 2;

    echo "<p>A média é " . number_format($media, 2, ".") . "</p>";
    ?>

    <?php if($media >= 7): ?>
        <p style='color: green'> Você está aprovado! </p>
    <?php else: ?>
        <p style='color: red'> Você está reprovado! </p>
    <?php endif; ?>

</body>
</html>