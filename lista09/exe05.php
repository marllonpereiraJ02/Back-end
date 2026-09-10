<?php

$celulares = [
    "(11) 99999-1111",
    "(21) 98888-2222",
    "(31) 97777-3333",
    "(41) 96666-4444",
    "(51) 95555-5555"
];

$soma = 0;

foreach ($celulares as $numero) {
    echo "$numero <br>";
    $soma = $soma + 1;
}

echo "Total de contatos: $soma";

?>