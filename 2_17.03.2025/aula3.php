<?php 

    // for(int i = 0; i < 10; i++){}

    for($i = 0; $i <= 5; $i++){
        echo "<p>Contador: $i</p>\n";
    }

    echo "<p>-----------------------------</p>";

    $valor = 0;
    while($valor <= 5){
        echo "<p>Contador: $valor</p>\n";
        $valor += 2;
    }

    echo "<p>-----------------------------</p>";

    $valor = 0;
    do{
        echo "<p>Do while: $valor</p>";
        $valor += 1;
    } while($valor <= 5);

    echo "<hr>";

    // como definir um array
    echo "<br>";
    $um_array = [];
    var_dump($um_array);
    echo "<br>";
    $outro_array = array();
    var_dump($outro_array);

    echo "<p>-----------------------------</p>";

    // jeitos de "ver" um array
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    var_dump($frutas);
    echo "<br>";
    print_r($frutas);

    echo "<p>-----------------------------</p>";

    // arrays podem agrupar qualquer tipo de variável
    $numeros = [1, 5, 7, 2.2, 5.3, 1];
    var_dump($numeros);

    echo "<br><br>";

    $tudo = [1, "ola", 1.50, true, "adeus", 5];
    print_r($tudo);
    echo "<br>";
    var_dump($tudo);
    echo "<br><br>";

    echo "<hr>";

    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

    echo "Lista de Compra:";

    for($i = 0; $i < 4; $i++){
        echo "<br> - Item: " . $frutas[$i];
    }

    // para cada - fruta - array frutas
    // fruta -> $fru
    foreach($frutas as $fru){
        echo "<br> ** Item: $fru";
    }

    echo "<hr>";
    
    $pessoa = [
        "nome" => "João", 
        "idade" => 18, 
        "cidade" => "Cwb"
    ];

    // $pessoa["nome"]; // nome João

    echo "<pre>";
    var_dump($pessoa);
    echo "<br>";
    print_r($pessoa);
    echo "<h3>Nome: " . $pessoa["nome"] . "<h3";
    echo "</pre>";
    
    echo "<hr>";

    $turma = [
        ["nome" => "João",    "idade" => 18, "cidade" => "Cwb"],
        ["nome" => "Maria",   "idade" => 20, "cidade" => "Sp"],
        ["nome" => "Roberto", "idade" => 19, "cidade" => "Sjp"]
    ];

    echo "<pre>";
    print_r($turma);
    echo "</pre>";

    // for($i = 0; $i < 3; $i++){
    //     echo "<h3>Aluno " . $turma[$i][0] . "</h3>" ;
    //     echo "<p>Idade: </p>";
    //     echo "<p>Cidade: </p>";
    // }

    echo "<hr>";
    foreach($turma as $aluno){
        echo "<h3>Aluno " . $aluno["nome"] . "</h3>" ;
        echo "<p>Idade: " . $aluno["idade"] . "</p>" ;
        echo "<p>Cidade: " . $aluno["cidade"] . "</p>" ;
    }



?>