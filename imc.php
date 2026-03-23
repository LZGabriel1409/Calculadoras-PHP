<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <h2>Calculadora de IMC</h2>
    <form method="POST" action="imc.php">
        <label for="peso">Peso (kg)</label>
        <input name="peso" id="peso" type="text" />
        
        <label for="altura">Altura (m)</label>
        <input name="altura" id="altura" type="text" />

        <button type="submit">Calcular</button>
    </form>

    <?php
    if($_POST){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);

        echo "<p>Seu Peso: $peso kg</p>";
        echo "<p>Sua altura: $altura m</p>";
        echo "<h2>Seu IMC: " . number_format($imc, 2, ",");
        
        if($imc < 18.5){
            echo "<p>Estado: Magreza</p>";
        }
        else{if($imc > 18.5 && $imc < 24.9){
                echo "<p>Estado: Normal</p>";
        }else{if($imc > 25 && $imc < 29.9){
                echo "<p>Estado: Sobrepeso</p>";
        }else{if($imc > 30 && $imc < 34.9){
                echo "<p>Estado: Obesidade Grau I</p>";
        }else{if($imc > 35 && $imc <39.9){
                echo "<p>Estado: Obesidade Grau II</p>";
        }else{
                echo "<p>Estado: Obesidade Grau III</p>";
        };};};};};
    };
    ?>
    <br><br>
    <nav>
        <a href="index.php">Voltar ao Menu</a>
    </nav>
</body>
</html>
