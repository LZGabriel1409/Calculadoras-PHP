<?php
//require('imposto.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php

    function calcularImposto($valor) {
        return $valor * 1.10;
    }

    function formatarMoeda($valor) {
        return "R$ " . number_format($valor, 2, ',', '.');
    }
    $produtos = [
        ["produto" => "Mouse Gamer", "preco" => 150.00],
        ["produto" => "Teclado Mecânico", "preco" => 350.00],
        ["produto" => "Monitor 144hz", "preco" => 1200.00],
        ["produto" => "Headset 7.1", "preco" => 280.00]
    ];

    foreach ($produtos as $key => $produto) {
        $ordem = $key + 1;
        $nome = $produto['produto'];
        $preco = $produto['preco'];
        $preco = number_format($preco, 2, ',', '.');
        echo "<p>$ordem - $nome: R$ $preco</p>";
    }

    ?>
    <nav>
        <a href="index.php">Voltar ao Menu</a>
    </nav>
</body>
</html>