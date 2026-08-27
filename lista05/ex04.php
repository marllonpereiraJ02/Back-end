<?php

$letra = "a";

echo "Bem-vindo ao Sistema de Identificação de Vogais e Consoantes <br>";

if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u' ||
    $letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U') {
    
    echo "É uma Vogal.";
} 
else {
    echo "É uma Consoante.";
}

?>
