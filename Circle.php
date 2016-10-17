<?php
require('Shape.php');

class Circle extends Shape {
    
    private $radious;
    
    public function __construct($x, $y, $color, $radious) {
        parent::__construct($x, $y, $color);
        $this->setR($radious);
    }
          public function setR($radious) {
              if(is_numeric($radious) && $radious > 0) {
                  $this->setR = $radious;
              }
          }
          public function __destruct() {
        echo "Usuwam kształt o parametrach:<br>";
        echo $this->printInfo();
    }
    public function getRadious($radious) {
        return $this->radious;
        
    }
    public function printInfo() {
        parent::printInfo();
        echo "Promien to:  $this->radious";
    }
    public function getSurface() { //pole powierzchni
        return pi() * pow($this->r,2);
        
    }
    public function getCircium() {
        return pi() * 2 *$this->r;
    }

}
