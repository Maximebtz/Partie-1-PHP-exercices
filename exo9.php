<?php
$age = 20;
$sexe = "F";

if (($age >= 20 and $age <= 35 and $sexe == "H")|| ($age >= 18 and $age <= 35 and $sexe == "F")){
    echo "La personne est imposable";
}
else{
    echo "La personne n'est pas imposable";
}
?>