<?php
//7 – Faça um programa onde o usuário possa escolher qual a tabuada que se deseja imprimir. Exiba a tabuada desse número de 1 a 10. Usando o FOR

$tabuada = '2';
$numero = '';

for($numero=1;$numero<=10;$numero++){
        echo($tabuada."*".$numero."= ".$tabuada*$numero."<br>");

}
?>