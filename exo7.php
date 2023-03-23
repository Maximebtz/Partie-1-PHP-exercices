<?php

$age = 4;

   if($age >= 6 and $age <= 7){
    echo "The child have $age is a : Poussin";
   }
   elseif($age >= 8 and $age <= 9){
    echo "The child have $age is a : Pupille";
   }
   elseif($age >= 10 and $age <= 11){
    echo "The child have $age is a : Minime";
   }
   elseif($age >= 12){
    echo "The child have $age is a : Cadet";
   }
   else{
    echo "The child have $age it will not be managed";
   }
?>