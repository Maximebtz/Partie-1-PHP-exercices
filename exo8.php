<?php


$nombre = 4;
$prod = 1;
$i = 0;

//Boucle qui repètera le calcul 10x 
while($i <= 10){
    $prod = $nombre*$i;
    echo $nombre . ' x ' . $i . ' = ' . $prod . '<br>';
    $i++;
}

?>