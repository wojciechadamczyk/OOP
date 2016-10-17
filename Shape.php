<?php

class Shape {
    protected $x;
    protected $y;
    protected $color;
    
    public function __construct($x, $y, $color) {
        if(is_numeric($x) && is_numeric($y)) {
            $this->x = $x;
            $this->y = $y;
        } else {
            $this->x = 0;
            $this->y = 0;
        }
        
        if(is_string($color)) {
            $this->color = $color;
        } else {
            $this->color = 'brak koloru';
        }
        echo "Tworzę kształt o parametrach:<br>";
        $this->printInfo();

    }
    
    public function __destruct() {
        echo "Usuwam kształt o parametrach:<br>";
        echo $this->printInfo();
    }
    
    public function printInfo() {
        echo "wspolrzedne srodka: ($this->x, $this->y)<br>";
        echo "kolor: $this->color<br>";
    }
    
    public function distanceTo($shape) {
        $distanceX = abs($this->x - $shape->x);
        $distanceY = abs($this->y - $shape->y);
        
        $distance = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
        
        return $distance;
    }
}


//$shape1 = new Shape(-15, 20, 'blue');
//$shape2 = new Shape(7, 5, 'red');
//
//$shape1->printInfo();
//
//echo "Odleglosc miedzy ksztaltami: " . round($shape1->distanceTo($shape2), 2) . "<br>";
//
//echo "<hr>";