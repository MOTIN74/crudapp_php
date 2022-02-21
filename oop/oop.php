<?php

class Person {
    public $x, $y, $z;
    public function __construct($a, $b) {
        $this->x = $a;
        $this->y = $b;
        
    }






    public function mysum() {
        
        $this->z = $this->x +$this->y ;
        return $this->z;
    }
    
}

$asip = new Person(200,250);
$asip->x = 100;
$asip->y = 200;

echo $asip->mysum();







?>