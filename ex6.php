<?php
//6 – Faça um programa que calcule a soma dos primeiros 50 números pares.

$i = '';
$soma = 0;

for($i=0;$i<=100;$i++){
    if ($i % 2 == 0) $soma += $i;
};

echo $soma;
?>