<?php
require('Calculator.php');

class AdvancedCalculator extends Calculator {
    //static public $pi = 3.14;
    const PI = 3.14;
    
    public function pow($num1, $num2) {
        $result = pow($num1, $num2);
        $this->log[] = "$num1 ^ $num2 equals $result";
        return $result;
    }
    
    public function root($num1, $num2) {
        if ($num2 == 0) {
            return false;
        }
        
        $result = pow($num1,1 / $num2);
        $this->log[] = "root $num2 of $num1 equals $result";
        return $result;
    }
    
    static public function computeCircleRadius($r) {
        return self::PI * pow($r,2);
    }
}

$advCalc1 = new AdvancedCalculator();
echo $advCalc1->add(7,19);
echo "<br>";
echo $advCalc1->root(81, 2);
$advCalc1->printOperations();

echo AdvancedCalculator::computeCircleRadius(15);


