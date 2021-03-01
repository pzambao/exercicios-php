<?php
//5 – Peça ao usuário para digitar cinco nomes. Exiba na tela todos os nomes digitados, porém de maneira invertida (do último para o primeiro).
$Nomes = array('Pedro<br>','Thiago<br>','Joao<br>','Ruan<br>','Pablo<br>');
$i = '';

for($i=4;$i>=0;$i--){
    echo $Nomes[$i];
};


?>