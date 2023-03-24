<?php

//Marquer les notes dans une variable
$notes = array(10,12,8,19,3,16,11,13,9);

//Créer une variable qui compte combien il y a de notes
$nbNote = count($notes);

//Créer une variable qui fait la somme des notes
$resMoy = array_sum($notes);

//Créer une variable qui calcul la moyenne
$moy = $resMoy / $nbNote;

//Afficher la phrase
echo "sa moyenne générale est donc de : ";

//Afficher la moyenne avec maximum 2 chiffres après la virgule avec "number_fotmat"
echo number_format($moy,2);

?>