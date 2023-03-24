

<?php

//Ecrire la phrase de départ
$phrase = 'Engage le jeu que je le gagne'; 

//Ecrire la variable d'inversement avec "strolower" pour tout mettre en minuscule
$inverse = strtolower(strrev($phrase)); 

//Si $phrase est identique a $inverse
if (strtolower($phrase) === $inverse) { 

//Alors affirmatif
    echo $phrase . ' est palindrome'."<br>"; //Si 

//Si autre, alors négatif
} else {
    echo $phrase . ' n\'est pas palindrome '."<br>";
}

echo strrev($phrase); //rajout du reverse en-dessous
?>