<?php

// date de fin de l'abonnement
$naissance = new DateTime("1985-01-17");
	
// maintenant (au moment où le script est exécuté)
$now_date = new DateTime("now");

// différence des deux timestamps
$diff = $naissance->getTimes() - $now_date->getTimes();

// affichage
echo "La différence entre ces deux dates est : $diff->format(%y, %m, %d)"

?>