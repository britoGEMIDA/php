<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    

    <!-- Programador: Vitor Hugo -->

    <!-- CSS Interno -->
    <style>
        .destaque {color:blue;}
        .para {color: red;}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="para">Programador: Fernando Brito</p>
    <hr>

    <?php
    // Geração de texto (string)
    echo "Chama Sesi-Senai !";

    /* Geração de texto estruturado (com tags, atributos)*/
    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
    echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";
    
    
    ?>

    <h1>01 não é 02</h1>
    <p>Deus não escolhe os capacitados, mas capacita os escolhidos!/p>

    <?php
    $linguagem = " Linguagem PHP.";
    
    ?>
    <p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
    
</body>
</html>