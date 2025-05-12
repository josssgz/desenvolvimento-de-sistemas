<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>

    <h2>Verificação de Acesso</h2>

    <?php 
    
        $idade = 27;
        $ingresso = true;

        if($idade >= 18 && $ingresso){
            echo "<p> Acesso liberado! </p>";
        }
        else{
            echo "<p> Acesso negado! </p>";
        }

    ?>

    <?php if($idade >= 18 && $ingresso): ?>
        <p style="color: green"> Acesso liberado! (<?= $idade ?>) </p>
    <?php endif; ?>

</body>
</html>