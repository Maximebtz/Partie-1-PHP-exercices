<?php
$age = 18;
$sexe = "H";

if($age >= 18 and $age<=35 and $sexe = "F"){
    echo "La personne est imposable";
}
elseif($age >= 20 and $age<=35 and $sexe = "M"){
    echo "La personne est imposable";
}
elseif($age < 20 and $age>35 and $sexe = "F"){
    echo "La personne n'est pas imposable";
}
elseif($age <= 20 and $age>=35 and $sexe = "M"){
    echo "La personne n'est pas imposable";
}
?>