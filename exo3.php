<h1>Exercice3</h1>

<p>Notre formation DL commence aujourd’hui</p>

<h2>Resultat</h2>

<?php

//Créer une variable textuelle
$phrase = "Notre formation DL commence aujourd’hui";

//Remplacer avec "str_replace"
$changement = str_replace("aujourd’hui", "demain", $phrase);

echo $phrase."<br>";
echo $changement;

?>
