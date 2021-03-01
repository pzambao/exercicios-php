<?php
// 2 – Peça ao usuário para digitar 3 números. Verifique qual é o maior número e exiba-o.
$n1 = 6;
$n2 = 4;
$n3 = 2;
$resultado = '';


if(($n1>$n2) && ($n1>$n3)){
    $resultado = "O maior número é o $n1";
}elseif(($n2>$n1) && ($n2>$n3)){
    $resultado = "O maior número é o $n2";
}else{
    $resultado = "O maior número é o $n3";
}

echo $resultado;

?>