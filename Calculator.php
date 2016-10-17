<?php

class Calculator {
    protected $log;
    public $name;
    
    public function __construct() {
        $this->log = array();
    }
    
    public function  add($num1,$num2) {
        $result = $num1 + $num2;
        $this->log[] = "Added $num1 and $num2 got $result";
        return $result;
    }
    
     public function  multiply($num1,$num2) {
        $result = $num1 * $num2;
        $this->log[] = "Multiplied $num1 with $num2 got $result";
        return $result;
    }
    
     public function subtract($num1,$num2) {
        $result = $num2 - $num1;
        $this->log[] = "Substracted $num1 from $num2 got $result";
        return $result;
    }
    
     public function  divide($num1,$num2) {
         if ($num2 == 0) {
             return false;
         }
         
        $result = $num1 / $num2;
        $this->log[] = "Divided $num1 by $num2 got $result";
        return $result;
    }
    public function printOperations() {
        echo "<h3>Log operacji $this->name</h3>";
        foreach ($this->log as $logEntry) {
            echo "$logEntry<br>";
        }
    }
    public function clearOperations() {
        $this->log = array();
        // unset($this->log); - nie robimy tak bo chcemy zeby zostala pusta tablica a nie null
    }
}

//$calc1 = new Calculator();
//$calc1->name = "Pierwszy kalkulator";
//
//$calc2 = new Calculator();
//$calc2->name = "Drugi kalkulator";
//
//echo $calc2->divide(25, 2);
//echo "<br>";
//
//echo $calc1->add(7, 5);
//echo "<br>";
//
//$calc1->printOperations();
//$calc2->printOperations();
