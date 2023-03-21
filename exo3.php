<h1>Exercice3</h1>

<p>Notre formation DL commence aujourd’hui</p>

<h2>Resultat</h2>

<?php
$phrase = "Notre formation DL commence aujourd’hui";
$changement = str_replace("aujourd’hui", "demain", $phrase);
echo $phrase."<br>";
echo $changement;
?>
