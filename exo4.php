

<?php
$phrase = 'Engage le jeu que je le gagne'; //Ecrire la phrase de départ
$inverse = strtolower(strrev($phrase)); //Ecrire la variable d'inversement 
if (strtolower($phrase) === $inverse) { 
    echo $phrase . ' est palindrome'."<br>"; //Si 
} else {
    echo $phrase . ' n\'est pas palindrome '."<br>";
}
echo strrev($phrase); //rajout du reverse en-dessous
?>