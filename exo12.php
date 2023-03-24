<?php

//Créer une variable "users" key => value
$users = array(
  "Mickael"=>"FR",
  "Virgile"=>"ES",
  "Marie-Claire"=>"EN",
);

//Créer un fonction qui dira tel ou tel mot en fonction de la valeur ,(langue), assiociée
function direBonjour($langue, $name){
  switch($langue){ //if
    case "FR" : echo "Salut ".$name."<br>";
    break;
    case "ES" : echo "Hola ".$name."<br>";
    break;
    case "EN" : echo "Hello ".$name."<br>"; //elseif
    break; //else
    default : echo "La langue ....";
  }
}

//Créer un boucle qui prend les valeurs de la première variable ($users)
foreach($users as $key => $value){

//Ecrire le mot traduit en fonction de la clef et de la valeur de $users
  direBonjour($value, $key); 
} 

?>






/---------Solution 2---------/
// function showMessageFromName($name, $usertable, $translation) {
//   $text = $translation[$usertable[$name]]." ".$name." !";
//   echo $text;
// }

// showMessageFromName("Virgile", $user, $language)