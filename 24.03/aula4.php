<?php 

    declare(strict_types=1);

    // echo "<h1>Criando um Título!</h1>"

    // void, int, float, string, def -> function

    function criarTituloPadrao(){
        echo "<h1>Criando um Título!</h1>";
    }
    
    criarTituloPadrao();
    

    echo "<hr>";


    function criarTituloH1($texto){
        echo "<h1> $texto </h1>";
    }

    criarTituloH1("Título da Aula 4 - Funções");
    criarTituloH1("Outro Título");


    echo "<hr>";


    function tituloLegal($texto){
        echo "<h2>####################</h2>";
        echo "<h2>### $texto ###</h2>";
        echo "<h2>####################</h2>";
    }

    tituloLegal("Teste");


    echo "<hr>";


    function calcularMedia($nome, $nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;

        if($media >= 6){
            echo "<p>O aluno(a) $nome foi aprovado com média $media</p>";
        }
        else{
            echo "<p>O aluno(a) $nome foi reprovado com média... melhor não saber.</p>";
        }
    }

    calcularMedia("João", 3.7, 8.8);
    calcularMedia("Maria", 6.9, 9.3);
    calcularMedia("Rafael", 4.2, 7.6);


    echo "<hr>";


    function somar($a, $b){
        $soma = $a + $b;
        echo "<li> $a + $b = $soma </li>";
    }

    echo "Lista de Somas";
    somar(10, 11);
    somar(88, 14);
    somar(22, 17);


    echo "<hr>";


    function somarNumeros(...$numeros){
        // print_r($numeros);

        $soma = 0;
        echo "<li>";

        for($i = 0; $i < count($numeros); $i++){
            $soma += $numeros[$i];
            echo $numeros[$i] . " + ";
        }

        echo " = $soma";

    }

    somarNumeros(2, 2, 9, 10, 22);
    somarNumeros(2, 2, 2);
    somarNumeros(10, 20, 30, 40);


    echo "<hr>";


    function seila($teste, ...$coisas){
        var_dump($coisas);
    }

    seila(2, 2, 3, "oi", false, 30.2);


    echo "<hr>";


    $verdadeiro = true;
    if($verdadeiro){ 

        function calcularIdade($nome, $ano){
            $idade = 2025 - $ano;
            echo "<p>$nome tem $idade anos.</p>";
        }
    }

    calcularIdade("José", 2005);


    echo "<hr>";


    function junior(){
        echo "faz algo";

        function neto(){
            echo "<br> faz outro algo";
        }

    }

    junior();
    neto();


    echo "<hr>";


    function soma($num){
        $num += 5;
        echo "<br> Número = $num";
    }

    $var1 = 10;
    echo "Var1 = $var1";

    soma($var1);
    echo "<br> Var1 = $var1";


    echo "<hr>";


    function subtracao($a, $b=5){
        $sub = $a - $b;
        echo "<li> $a - $b = $sub";
    }

    subtracao(74);
    subtracao(74, 4);


    echo "<hr>";


    function divisao(float $num1, float $num2){
        var_dump($num1);
        var_dump($num2);
        $res = $num1 / $num2;
        var_dump($res);
        return $res;
    }

    $div = divisao(10, 10);
    echo "conta = $div";


    echo "<hr>";


    function conta($a, $b, &$resposta){
        $resposta = $a + $b;
    }

    $resp = 0;
    conta(3, 3, $resp);
    echo "$resp";

?>