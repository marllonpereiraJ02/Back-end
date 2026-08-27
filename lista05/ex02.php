<?php
$nota01 = 7;
$nota02 = 7;
$nota03 = 7;
$notafinal = ($nota01 + $nota02 + $nota03 )/3;
echo "Bem vindo ao Sistema de Aprovação de Alunos <br>";

if ($notafinal >= 6 ) {
    echo "Aprovado ";
} else {
    echo "Reprovado";
}
?>