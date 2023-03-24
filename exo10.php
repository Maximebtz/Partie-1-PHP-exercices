<?php
echo "Rendu monnaie :";

$paye = 152;
$verse = 200;
$rendu = $verse - $paye;


echo " Le montant rendu est <br>";

//nombre de billets de 10 avec "floor" pour arrondi à un entier
$nbBillet10 = floor($rendu / 10);
$reste = $rendu % 10;

//nombre de billets de 5 
$nbBillet5 = floor($reste / 5);
$reste = $reste % 5;

//nombre de piece de 2 
$nbPiece2 = floor($reste / 2);
$reste = $reste % 2;

//nombre de piece de 1 
$nbPiece1 = floor($reste / 1);
$reste = $reste % 1;

echo "$nbBillet10 billets de 10 <br>";
echo "$nbBillet5 billets de 5 <br>";
echo "$nbPiece2 pièces de 2 <br>";
echo "$nbPiece1 pièces de 1 <br>";
?>