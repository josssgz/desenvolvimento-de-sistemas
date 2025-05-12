<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Estoque</title>
</head>
<body>
    
    <h1>Gerenciador de Estoque Avançado</h1>
    <h2>Lista de Produtos</h2>

    <?php 
        $produtos = [
            ["nome" => "Celular", "qtde" => 3, "preco" => 2199.98, "categoria" => "Eletrônicos"],
            ["nome" => "Geladeira", "qtde" => 2, "preco" => 4763.99, "categoria" => "Eletrodomésticos"],
            ["nome" => "Sofá", "qtde" => 7, "preco" => 1247.69, "categoria" => "Móveis"],
            ["nome" => "Notebook", "qtde" => 5, "preco" => 3079.78, "categoria" => "Eletrônicos"]
        ];

        $somaValores = 0;
        $qtdeProdutos = count($produtos);
    ?>

    <?php foreach($produtos as $item){
        $somaValores += $item["preco"];
        echo "<p><strong>Nome: </strong>" . $item["nome"];
        echo " | <strong>Quantidade: </strong>" . $item["qtde"];
        echo " | <strong>Preço: </strong>R$ " . number_format($item["preco"], 2, ",", ".");
        echo " | <strong>Categoria: </strong>" . $item["categoria"] . "</p>";
    } ?>

    <?php 
        $contador = [
            ["categoria" => "Eletrônicos", "counter" => 1],
            [],
            [],
            []
        ];
    
    ?>

    <h3>Valor Total em Estoque: R$ <?=number_format($somaValores, 2, ",", ".")?></h3>

    <h3>Média de Preços: R$ <?=number_format($somaValores/$qtdeProdutos, 2, ",", ".")?></h3>

    <h3>Categoria + Presente: </h3>

</body>
</html>