<?php

$seguidores = ["jamal55", "julia.dixz","marllao.02"];
$soma = 0;

foreach($seguidores as $pessoas){
    echo "$pessoas <br>";
    $soma = $soma +1;
}

echo "A primeira posição da lista é: $seguidores[0]";
?>