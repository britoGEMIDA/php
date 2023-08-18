<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Programdor: Fernando Brito -->

</head>
<body>

<?php

/*Código para PHP números inteiros*/ 
//    Esse é o int
    echo 0;
    echo "<br>";
    echo -7;
    echo " | Agora número negativo. <br>";
    echo 10 - 5;
    echo " | Agora número positivo. <br>";
    echo 80 - 89;
    echo " | Agora número negativos. <br>";
    echo 15 - 9;
    echo " | Agora número postivo. <br>";

    $n = 100;
    echo $n;
    echo " | Alimentar variável e mostra se é negativo ou positivo. <br>";

    ?>
    <br>

        <!-- Código PHP para números tipo float -->

        <?php
        $str = "SESI/SENAI <br>";
        $num = 300;

        if(is_string($str)) {
            echo "$str Valmir é DEV <br>";
        }

        if(is_string($num)) {
            echo "$num Valmir é Professor <br>";
        }

        if(is_string("asd")) {
            echo "É um ótimmo DEV <br>";
        }
    ?>
    <br>

        <!-- Código para verificar booleanos -->

        <?php
    
    $a = true;
    if(is_bool($a)) {
        echo "Eu sou um DEV! <br>";
    }
    if(is_bool(0)) {
        echo "Estou adquirindo conhecimento! <br>";
    }
    if(is_bool(false)) {
        echo "Irei ficar cada vez melhor! <br>";
    }
    if(0.0 == false) {
        echo "Para conseguir um ótimo emprego! <br>";
    }
    ?>
    <br>

    <!-- Mostra no navegador somente o valor da primeira posição na lista -->

    <?php

    echo "<p>O ranking dos aprovados na USP:]";

echo "<hr>Fernando Brito";

$arr = ["SENAI", 2, true];

echo "<br>";
print_r($arr);
echo "<br>";
print_r($arr);
echo "<br><p> Ele foi aprovado!<?p>";
?>

    
    
    
</body>
</html>