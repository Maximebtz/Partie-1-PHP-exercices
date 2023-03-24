<?php



// $language = array(
//   "FR" => "Salut",
//   "EN" => "Hello",
//   "ES" => "Hola",
// );

$users = array(
  "Mickael"=>"FR",
  "Virgile"=>"ES",
  "Marie-Claire"=>"EN",
);



function direBonjour($langue, $pikachu){
  switch($langue){ //if
    case "FR" : echo "Salut ".$pikachu."<br>";
    break;
    case "ES" : echo "Hola ".$pikachu."<br>";
    break;
    case "EN" : echo "Hello ".$pikachu."<br>"; //elseif
    break; //else
    default : echo "La langue ....";
  }
}

// function showMessageFromName($name, $usertable, $translation) {
//   $text = $translation[$usertable[$name]]." ".$name." !";
//   echo $text;
// }
foreach($users as $key => $value){
  direBonjour($value, $key);
  // echo $value.$key;
  // if($value == "FR"){
  //   echo "Salut".$key."<br>";
  // }
  // elseif($value == "RU"){
  //   echo "Privet".$key."<br>"; 
  // }
}

// showMessageFromName("Virgile", $user, $language)

?>