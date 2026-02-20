<?php
    $nome = "Henrique";
    $idade = 16;
    $altura = 1.78;
    $status = false;

    //exibir valores na tela
    echo "O nome é: $nome"; //primeira forma
    echo "<br>";
    echo "O nome é: " . $nome; //segunda forma
    echo "<br>";
    echo $nome; //aparecer apenas a variavel
    echo "<br>";

    //verificar tipo de valor de uma variavel
    var_dump($altura);
    echo "<br>";
    print_r($altura); //aparece apenas a variavel, sem seu tipo
    echo "<br>";

    for ($i=1; $i <7 ; $i++) { 
        echo $i . "<br>";
    
    }

    //curiosidade do php sobre valores booleanos
    echo "O status é: $status"; //se o status for "true" = 1, se for "false" = vazio
    
?>