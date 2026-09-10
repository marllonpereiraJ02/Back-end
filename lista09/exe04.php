<?php

$numeros = [1, 2, 3, 4, 675, 6, 7, 8, 9, 10];
$maior= 0;

foreach ($numeros as $n) {
    if ($n > $maior) {
        $maior = $n;
    }
}
 echo" Esse número é o Maior: $maior ";
?>