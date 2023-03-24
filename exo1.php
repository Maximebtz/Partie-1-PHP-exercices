<h1>Exercice1</h1>

<p>Notre formation DL commence aujourd'hui</p>

<h2>Resultat</h2>

<?php 

//Créer un variable textuelle
$phrase = "Notre formation DL commence aujourd'hui";

//Créer un variable qui compte les caractères avec "strlen" qui contient notre phrase du haut
$longueur = strlen($phrase);


echo "La phrase $phrase contient $longueur caractères<br>";
echo "La phrase $phrase contient ". strlen($phrase). " caractères<br>";
?>