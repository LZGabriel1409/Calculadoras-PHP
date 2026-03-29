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

        header("Location: imc.php?peso=" . number_format($peso, 2) . "&altura=" . number_format($altura, 2) . "&imc=" . number_format($imc, 2));
        exit;
    };
    
    if (isset($_GET['peso'])){
        echo "<p>Seu Peso: " . $_GET['peso'] . "kg</p>";
    }
    if (isset($_GET['altura'])){
        echo "<p>Sua altura: " . $_GET['altura'] . "m</p>";
    }
    if (isset($_GET['imc'])){
            echo "<h2>Seu IMC: " . $_GET['imc'] . "</h2>";
            if($_GET['imc'] < 18.5){
                echo "<h3>Estado: Magreza</h3>";
            } else if($_GET['imc'] > 18.5 && $_GET['imc'] < 24.9){
                    echo "<h3>Estado: Normal</h3>";
            } else if($_GET['imc'] > 25 && $_GET['imc'] < 29.9){
                    echo "<h3>Estado: Sobrepeso</h3>";
            } else if($_GET['imc'] > 30 && $_GET['imc'] < 34.9){
                    echo "<h3>Estado: Obesidade Grau I</h3>";
            } else if($_GET['imc'] > 35 && $_GET['imc'] <39.9){
                    echo "<h3>Estado: Obesidade Grau II</h3>";
            } else{
                echo "<h3>Estado: Obesidade Grau III</h3>";
            }
    }
        

    ?>
    <br><br>
    <nav>
        <a href="index.php">Voltar ao Menu</a>
    </nav>
</body>
</html>
