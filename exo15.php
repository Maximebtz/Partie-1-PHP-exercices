<?php

class Personne{


    // declaration of all properties of the object of the class
    public string $name;
    public string $firstname;
    public DateTime $dateofbirth;

public function __construct(string $name, string $firstname, string $date){
    
    // $this refers to the object we are in
    $this->name = $name;
    $this->firstname = $firstname;
    $this->dateofbirth = new DateTime($date);
}

//Create a function to calculate the diff to find the age
public function calculerDiffAge(){
    $today = new DateTime();
    $birth = $this->dateofbirth;
    $diff = date_diff($birth, $today);
    return $diff->y;
}

//Function to return the string
public function __toString(){
    return $this->name." ".$this->firstname." à ".$this->calculerDiffAge()." ans.<br>";
}
}


// intentiation of objects of the class Personne
// the object is a variable 
// we intantiate the object by filling the required fields for the constructor (order is important)
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

echo $p1;

?>