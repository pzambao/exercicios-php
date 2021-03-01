<?php
//9-Faça todas as tabuada 1 ao 10 usando For

$tabuada = '';
$numero = '';

for($tabuada=1;$tabuada<=10;$tabuada++){
        for($numero=1;$numero<=10;$numero++){
        echo($tabuada."*".$numero."= ".$tabuada*$numero."<br>");

        }
        echo("<br>");
}

?>