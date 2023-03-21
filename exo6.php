<?php 
// Afficher le total TTC d'une facture
$tauxTVA = 0.20;
$nbArticles = 5;
$prixHT = 9.99;


$totalTTC = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

?>