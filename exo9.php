<?php

$age = 20;
$sexe = "F";


    //Si entre 20 et 30 ans et Homme alors ok    ou  entre 18 et 35 ans et Femme
if (($age >= 20 and $age <= 35 and $sexe == "H")|| ($age >= 18 and $age <= 35 and $sexe == "F")){
    
    //Alors imposable
    echo "La personne est imposable";
}
    //Sinon pas imposable
else{
    echo "La personne n'est pas imposable";
}
?>