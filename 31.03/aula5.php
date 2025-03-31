<h2>Cadastro de Produtos (POST)</h2>

<form action="" method="post">
    Produto: <input type="text" name="produto"><br>
    Preço: <input type="text" name="preco"><br>
    Quantidade: <input type="text" name="quantidade"><br>
    <input type="submit" value="Calcular">
</form>

<?php 

    function varValida($variavel){
        return (!is_null($variavel) && !empty($variavel));
    }

    function calcularEFormatarEstoque(string $produto, float $valor, float $quant){

    }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // echo "<h3>Enviado</h3>";
        $produto = $_POST["produto"] ?? null;
        $preco = $_POST["preco"] ?? null;
        $quantidade = $_POST["quantidade"] ?? null;

        if(varValida($produto) && varValida($preco) && varValida($quantidade)){
            echo "<h3>sucesso</h3>";
        }
        else{
            echo "<h3>erro</h3>";
        }
    }
    else{
        echo "<h3>Digite os valores...</h3>";
    }
?>