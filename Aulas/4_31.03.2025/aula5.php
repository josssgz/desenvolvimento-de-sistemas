<?php 

    function varValida($variavel){
        return (!is_null($variavel) && !empty($variavel));
    }

    function calcularEFormatarEstoque(string $produto, float $valor, float $quantidade){
        $total = $valor * $quantidade;
        $infoProduto["total"] = number_format($total, 2, ",", ".");
        $infoProduto["preco"] = number_format($valor, 2, ",", ".");
        $infoProduto["quantidade"] = number_format($quantidade, 0, ",", ".");
        $infoProduto["valor"] = number_format($total, 2, ",", ".");
        $infoProduto["nome"] = ucwords($produto);
        return $infoProduto;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // echo "<h3>Enviado</h3>";
        $produto = $_POST["produto"] ?? null;
        $preco = $_POST["preco"] ?? null;
        $quantidade = $_POST["quantidade"] ?? null;

        if (varValida($produto) && varValida($preco) && varValida($quantidade)) {
            $preco = (float) $preco;
            $quantidade = (float) $quantidade;

            $info = calcularEFormatarEstoque($produto, $preco, $quantidade);
            include "infoProduto.php";
        } else {
            echo "<h3>Erro, digite os valores!</h3>";
            include "formulario.php";
        }
    } else {
        include "formulario.php";
    }
?>
