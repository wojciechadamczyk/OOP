<?php
class Owner {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    
}

class Car {
    public $name;
    public $owner;
    
    public function __construct($name,$owner) {
        $this->name = $name;
        $this->owner = $owner;
    }
    
    public function __clone() {
        $this->owner = clone $this->owner;
    }
}
$john = new Owner("John");
$car1 = new Car("samochod 1",$john);

$car2 = clone $car1;
$car->name = "samochod 2";
$car1->owner->name = "tom";

var_dump($car1);
var_dump($car2);
var_dump($john);