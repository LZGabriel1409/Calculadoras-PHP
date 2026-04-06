<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

$nota1 = 8;
$nota2 = 9;
$nota3 = 10;
$nota4 = 6;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

echo "<h1>Notas</h1>";
echo "<p>Nota 1: $nota1</p>";
echo "<p>Nota 2: $nota2</p>";
echo "<p>Nota 3: $nota3</p>";
echo "<p>Nota 4: $nota4</p>";
echo "<h2>Média: " . number_format($media , 1 , ",");

if($media < 5){
    echo "<p>Reprovado</p>";
}
else{if($media > 5 && $media < 6.9){
        echo "<p>Recuperação</p>";
}
else{
     echo "<p>Aprovado</p>";
    };
};
?>

</body>
</html>