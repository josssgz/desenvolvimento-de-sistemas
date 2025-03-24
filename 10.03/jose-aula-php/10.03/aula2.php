<!-- NÃO É PHP / COMENTÁRIO HTML -->

<?php 

    // É PHP / COMENTÁRIO PHP

    $nome = "José";           //
    $valorProduto = 3.5;      //  CRIAÇÃO DE VARIÁVEL
    $chuva = false;           // 

    //var_dump($nome);          // 
    //var_dump($valorProduto);  // CONSULTA DE VARIÁVEL
    //var_dump($chuva);         // 

    echo "<h2>Olá $nome!</h2>"; // IMPRIMIR ALGO DO PHP NO HTML
    print "<p>O valor do produto é R$ $valorProduto</p>";

    $num1 = 5;
    $num2 = 70;

    $soma = $num1 + $num2;

    echo "<h3>$num1 + $num2 = $soma</h3>";
    echo "<h3>$num2 / $num1 = " . $num2 / $num1 . "</h3>";

    echo "----------------";

    echo "<br> > $num1";

    $num1 += 1;
    echo "<br> > $num1";

    $num1 ++;
    echo "<br> > $num1";

    echo "<br>----------------<br>";

    $num3 = true;
    $num4 = 4;

    $soma = $num3 + $num4;
    echo "$num3 + $num4 = $soma";


?>