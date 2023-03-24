<?php

//date de naissance
$birthDate = '1985-04-10';
//date actuelle
$currentDate = '2023-03-24';


//créer un 'New DateTime' 
$startTime = new DateTime($birthDate);
$diff = $startTime->diff(new DateTime($currentDate));

//noter en années, mois, jours 
echo $diff->y.' Years<br>';
echo $diff->m.' Month<br>';
echo $diff->d.' Days<br>';

?>