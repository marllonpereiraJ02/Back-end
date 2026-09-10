<?php

$filmes = [
    "Velozes e Furiosos",
    "Os Sem-Floresta",
    "Homem-Aranha",
    "100 Metros",
    "Kipchoge: O Último Marco"
];

foreach ($filmes as $filme) {
    echo "$filme <br>";
}

$total = count($filmes);

echo "<br>Total de filmes na lista: $total";

?>