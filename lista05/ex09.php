<?php

$n1 = 104;
$n2 = 15;
$operação = "*"; 

if ($operação == "+") {
    echo "A soma: ", $n1 + $n2;
} 
elseif ($operação == "-") {
    echo "A subtração: ", $n1 - $n2;
}
elseif ($operação == "*") {
    echo "A multiplicação: ", $n1 * $n2;
}
elseif ($operação == "/") { 
    echo "A divisão: ", $n1 / $n2;
}
else { 
    echo "Operação inválida!";
}