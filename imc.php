<?php

$peso = 65;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

echo "<h1>IMC</h1>";
echo "<p>peso: $peso kg</p>";
echo "<p>altura: $altura m</p>";
echo "<h2>IMC: " . number_format($imc, 2);

if($imc < 18.5){
    echo "<p>Magreza</p>";
}
else{
    if($imc > 18.5 && $imc < 24.9){
        echo "<p>Normal</p>";
    }else{
        if($imc > 25 && $imc < 29.9){
            echo "<p>Sobrepeso</p>";
        }
        else{
            if($imc > 30 && $imc < 34.9){
                echo "<p>Obesidade Grau I</p>";
            }
            else{
                if($imc > 35 && $imc <39.9){
                    echo "<p>Obesidade Grau II</p>";
                }
                else{
                    echo "<p>Obesidade Grau III</p>";
                };
            };
        };
    };
};
