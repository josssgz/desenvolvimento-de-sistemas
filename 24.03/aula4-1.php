<?php 

    var_dump($_GET);

    // echo "<br> Q = " . $_GET["q"];
    // echo "<br> TESTE = " . $_GET["teste"];

    // $soma = $_GET["n1"] + $_GET["n2"];
    // echo "<br> Soma: " . $_GET["n1"] . " + " . $_GET["n2"] . " = " . $soma;

    echo "<hr>";

    echo "<h3>JEITO 01</h3>";
    $n1 = 0;
    $n2 = 0;

    if(isset($_GET["n1"])){
        $n1 = $_GET["n1"];
    }
    
    if(isset($_GET["n2"])){
        $n2 = $_GET["n2"];
    }

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";

    echo "<hr>";

    echo "<h3>JEITO 02</h3>";
    // operador ternário
    // n1 = ver se verdadeiro ? sendo ver : se não valor padrão
    $n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2 = isset($_GET["n2"]) ? $_GET["n2"] : 1;

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";


    echo "<hr>";

    echo "<h3>JEITO 03</h3>";
    $n1 = $_GET["n1"] ?? 5;
    $n2 = $_GET["n2"] ?? 1;

    $soma = $n1 + $n2;
    echo "<br>Soma: $n1 + $n2 = $soma";


?>