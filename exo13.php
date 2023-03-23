<?php

$notes = array(10,12,8,19,3,16,11,13,9);

$nbNote = count($notes);
$resMoy = array_sum($notes);
$moy = $resMoy / $nbNote;
echo "sa moyenne générale est donc de : ";
echo number_format($moy,2);


?>