<?php

$peso = 58;
$altura = 1.65;

$resultado = $peso / ($altura * $altura);

echo "Seu IMC é: " . number_format($resultado, 2);
echo "<br>";

if ($resultado >= 19 && $resultado <= 24) {
    echo "Peso ideal";
} elseif ($resultado >= 25 && $resultado <= 29) {
    echo "Sobrepeso";
} elseif ($resultado >= 30 && $resultado <= 34) {
    echo "Obesidade Grau I";
} elseif ($resultado >= 35 && $resultado <= 39) {
    echo "Obesidade Grau II";
} elseif ($resultado >= 40) {
    echo "Obesidade Grau III";
} elseif ($resultado < 19) {
    echo "Abaixo do peso";
}

?>